<?php 
/* Copyright (c) 1998-2012 ILIAS open source, Extended GPL, see docs/LICENSE */

include_once('./Services/Table/classes/class.ilTable2GUI.php');

/**
 * Export table
 *
 * @author Alex Killing <alex.killing@gmx.de>
 * @version $Id$
 *
 * @ingroup Services
 */
class ilExportTableGUI extends ilTable2GUI
{
	protected $custom_columns = array();
	protected $formats = array();
	
	/**
	* Constructor
	*/
	function __construct($a_parent_obj, $a_parent_cmd, $a_exp_obj)
	{
		global $ilCtrl, $lng, $ilAccess, $lng;
		
		$this->obj = $a_exp_obj;
		
		parent::__construct($a_parent_obj, $a_parent_cmd);
		$this->setData($this->getExportFiles());
		$this->setTitle($lng->txt('exp_export_files'));
		
		$this->initColumns();
		
		$this->setDefaultOrderField('timestamp');
		$this->setDefaultOrderDirection('desc');
		
		$this->setEnableHeader(true);
		$this->setFormAction($ilCtrl->getFormAction($a_parent_obj));
		$this->setRowTemplate('tpl.export_table_row.html', 'Services/Export');
		//$this->disable('footer');
		//$this->setEnableTitle(true);

		$this->addMultiCommand('download', $lng->txt('download'));
		$this->addMultiCommand('confirmDeletion', $lng->txt('delete'));
	}

	/**
	 * 
	 */
	protected function initColumns()
	{
		$this->addColumn($this->lng->txt(''), '', '1', true);
		$this->addColumn($this->lng->txt('type'), 'type');
		$this->addColumn($this->lng->txt('file'), 'file');
		$this->addColumn($this->lng->txt('size'), 'size');
		$this->addColumn($this->lng->txt('date'), 'timestamp');
	}

	/**
	 * Add custom column
	 *
	 * @param
	 * @return
	 */
	function addCustomColumn($a_txt, $a_obj, $a_func)
	{
		$this->addColumn($a_txt);
		$this->custom_columns[] = array('txt' => $a_txt,
										'obj' => $a_obj,
										'func' => $a_func);
	}
	
	/**
	 * Add custom multi command
	 *
	 * @param
	 * @return
	 */
	function addCustomMultiCommand($a_txt, $a_cmd)
	{
		$this->addMultiCommand($a_cmd, $a_txt);
	}

	/**
	 * Get custom columns
	 *
	 * @param
	 * @return
	 */
	function getCustomColumns()
	{
		return $this->custom_columns;
	}
	
	/**
	 * Get export files
	 */
	function getExportFiles()
	{
		$types = array();
		foreach ($this->parent_obj->getFormats() as $f)
		{
			$types[] = $f['key'];
			$this->formats[$f['key']] = $f['txt'];
		}
		include_once('./Services/Export/classes/class.ilExport.php');
		$files = ilExport::_getExportFiles($this->obj->getId(),
			$types, $this->obj->getType());
		return $files;
	}

	/**
	 * @param array $a_set
	 */
	protected function fillRow($a_set)
	{
		foreach($this->getCustomColumns() as $c)
		{
			$this->tpl->setCurrentBlock('custom');
			$this->tpl->setVariable('VAL_CUSTOM', $c['obj']->$c['func']($a_set['type'], $a_set['file']).' ');
			$this->tpl->parseCurrentBlock();
		}
		$this->tpl->setVariable('VAL_ID', $this->getRowId($a_set));

		$type = ($this->formats[$a_set['type']] != "")
			? $this->formats[$a_set['type']]
			: $a_set['type'];
		$this->tpl->setVariable('VAL_TYPE', $type);
		$this->tpl->setVariable('VAL_FILE', $a_set['file']);
		$this->tpl->setVariable('VAL_SIZE', $a_set['size']);
		$this->tpl->setVariable('VAL_DATE', ilDatePresentation::formatDate(new ilDateTime($a_set['timestamp'], IL_CAL_UNIX)));
	}

	/**
	 * @param array $row
	 * @return string
	 */
	protected function getRowId(array $row)
	{
		return $row['type'].':'.$row['file'];
	}
}