<?php
/* Copyright (c) 1998-2010 ILIAS open source, Extended GPL, see docs/LICENSE */

include_once("./Services/Export/classes/class.ilXmlExporter.php");

/**
 * Exporter class for html learning modules
 *
 * @author Stefan Meyer <meyer@leifos.com>
 * @version $Id: $
 * @ingroup ModulesGlossary
 */
class ilGlossaryExporter extends ilXmlExporter
{
	private $ds;

	/**
	 * Initialisation
	 */
	function init()
	{
	}

	/**
	 * Get tail dependencies
	 *
	 * @param		string		entity
	 * @param		string		target release
	 * @param		array		ids
	 * @return		array		array of array with keys "component", entity", "ids"
	 */
	function getXmlExportTailDependencies($a_entity, $a_target_release, $a_ids)
	{
		if ($a_entity == "glo")
		{
			$deps = array();
			
			include_once("./Services/Taxonomy/classes/class.ilObjTaxonomy.php");
			$tax_ids = array();
			foreach ($a_ids as $id)
			{
				$t_ids = ilObjTaxonomy::getUsageOfObject($id);
				if (count($t_ids) > 0)
				{
					$tax_ids[$t_ids[0]] = $t_ids[0];
				}
			}			
			if(sizeof($tax_ids))
			{
				$deps[] = array(
					"component" => "Services/Taxonomy",
					"entity" => "tax",
					"ids" => $tax_ids
				);
			}
			
			$advmd_ids = array();
			foreach($a_ids as $id)
			{
				$rec_ids = $this->getActiveAdvMDRecords($id);
				if(sizeof($rec_ids))
				{
					foreach($rec_ids as $rec_id)
					{
						$advmd_ids[] = $id.":".$rec_id;
					}
				}				
			}
			if(sizeof($advmd_ids))
			{
				$deps[] = array(
					"component" => "Services/AdvancedMetaData",
					"entity" => "advmd",
					"ids" => $advmd_ids
				);	
			}
			
			return $deps;
			
		}
		return array();
	}	
	
	protected function getActiveAdvMDRecords($a_id)
	{			
		include_once('Services/AdvancedMetaData/classes/class.ilAdvancedMDRecord.php');
		$active = array();		
		foreach(ilAdvancedMDRecord::_getActivatedRecordsByObjectType("glo", "term") as $record_obj)
		{
			$active[] = $record_obj->getRecordId();
		}		
		return array_intersect($active, ilAdvancedMDRecord::getObjRecSelection($a_id, "term"));						
	}

	/**
	 * Get xml representation
	 *
	 * @param	string		entity
	 * @param	string		target release
	 * @param	string		id
	 * @return	string		xml string
	 */
	public function getXmlRepresentation($a_entity, $a_schema_version, $a_id)
	{
		include_once './Modules/Glossary/classes/class.ilObjGlossary.php';
		$glo = new ilObjGlossary($a_id,false);

		include_once './Modules/Glossary/classes/class.ilGlossaryExport.php';
		$exp = new ilGlossaryExport($glo,'xml');
		$zip = $exp->buildExportFile();
	}

	/**
	 * Returns schema versions that the component can export to.
	 * ILIAS chooses the first one, that has min/max constraints which
	 * fit to the target release. Please put the newest on top.
	 *
	 * @return
	 */
	function getValidSchemaVersions($a_entity)
	{
		return array (
			"4.1.0" => array(
				"namespace" => "http://www.ilias.de/Modules/Glossary/htlm/4_1",
				"xsd_file" => "ilias_glo_4_1.xsd",
				"uses_dataset" => false,
				"min" => "4.1.0",
				"max" => "")
		);
	}

}

?>