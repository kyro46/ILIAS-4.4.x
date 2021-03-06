<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */

include_once("./Services/Table/classes/class.ilTable2GUI.php");

/**
* TableGUI class user search results
*
* @author Alex Killing <alex.killing@gmx.de>
* @version $Id$
*
* @ingroup ServicesSearch
*/
class ilRepositoryUserResultTableGUI extends ilTable2GUI
{
	const TYPE_STANDARD = 1;
	const TYPE_GLOBAL_SEARCH = 2;
	
	protected $lucene_result = null;
	
	
	protected static $all_selectable_cols = NULL;
	protected $admin_mode;
	protected $type;
	
	/**
	* Constructor
	*/
	function __construct($a_parent_obj, $a_parent_cmd, $a_admin_mode = false, $a_type = self::TYPE_STANDARD)
	{
		global $ilCtrl, $lng, $ilAccess, $lng, $ilUser;

		$this->admin_mode = (bool)$a_admin_mode;
		$this->type = $a_type;

		$this->setId("rep_search_".$ilUser->getId());
		parent::__construct($a_parent_obj, $a_parent_cmd);
		
		
		$this->setFormAction($ilCtrl->getFormAction($this->parent_obj));
		$this->setTitle($this->lng->txt('search_results'));
		$this->setEnableTitle(true);
		$this->setShowRowsSelector(true);
		

		if($this->getType() == self::TYPE_STANDARD)
		{
			$this->setRowTemplate("tpl.rep_search_usr_result_row.html", "Services/Search");
			$this->addColumn("", "", "1", true);
			$this->enable('select_all');
			$this->setSelectAllCheckbox("user[]");	
			$this->setDefaultOrderField("login");
			$this->setDefaultOrderDirection("asc");
		}
		else
		{
			$this->setRowTemplate("tpl.global_search_usr_result_row.html", "Services/Search");
			$this->addColumn('', '', "110px");
		}

		$all_cols = $this->getSelectableColumns();
		foreach($this->getSelectedColumns() as $col)
		{
			$this->addColumn($all_cols[$col]['txt'], $col);
		}
		
		if($this->getType() == self::TYPE_STANDARD)
		{
			
		}
		else
		{
			$this->addColumn($this->lng->txt('lucene_relevance_short'),'relevance');
			$this->setDefaultOrderField("relevance");
			$this->setDefaultOrderDirection("desc");
		}

	}
	
	/**
	 * enable numeric ordering for relevance
	 * @param type $a_field
	 * @return boolean
	 */
	public function numericOrdering($a_field)
	{
		if($a_field == 'relevance')
		{
			return true;
		}
		return parent::numericOrdering($a_field);
	}
	
	/**
	 * Get search context type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	
	/**
	 * Set lucene result
	 * For parsing relevances
	 * @param ilLuceneSearchResult $res
	 */
	public function setLuceneResult(ilLuceneSearchResult $res)
	{
		$this->lucene_result = $res;
	}
	
	/**
	 * Get lucene result
	 * @return ilLuceneSearchResult
	 */
	public function getLuceneResult()
	{
		return $this->lucene_result;
	}

	/**
	 * Get all selectable columns
	 *
	 * @return array
	 *
	 * @global ilRbacReview $rbacreview
	 */
	public function  getSelectableColumns()
	{
		global $rbacreview, $ilUser;

		if(!self::$all_selectable_cols)
		{			
			include_once './Services/Search/classes/class.ilUserSearchOptions.php';
			$columns = ilUserSearchOptions::getSelectableColumnInfo($rbacreview->isAssigned($ilUser->getId(), SYSTEM_ROLE_ID));				
			
			if($this->admin_mode)
			{
				// #11293
				$columns['access_until'] = array('txt' => $this->lng->txt('access_until'));
				$columns['last_login'] = array('txt' => $this->lng->txt('last_login'));				
			}
			
			self::$all_selectable_cols = $columns; 
		}
		return self::$all_selectable_cols;
	}
	
	/**
	 * Init multi commands
	 * @return 
	 */
	public function initMultiCommands($a_commands)
	{
		if(!count($a_commands))
		{
			$this->addMultiCommand('addUser', $this->lng->txt('btn_add'));
			return true;
		}
		$this->addMultiItemSelectionButton('member_type', $a_commands, 'addUser', $this->lng->txt('btn_add'));
		return true;
	}
	
	/**
	* Fill table row
	*/
	protected function fillRow($a_set)
	{
		global $ilCtrl, $lng;

		$this->tpl->setVariable("VAL_ID", $a_set["usr_id"]);
		
		$link = '';
		if($this->getType() == self::TYPE_GLOBAL_SEARCH)
		{
			include_once './Services/User/classes/class.ilUserUtil.php';
			$link = ilUserUtil::getProfileLink($a_set['usr_id']);
			if($link)
			{
				$this->tpl->setVariable('IMG_LINKED_TO_PROFILE',$link);
				$this->tpl->setVariable(
					'USR_IMG_SRC_LINKED',
					ilObjUser::_getPersonalPicturePath($a_set['usr_id'],'xsmall')
				);
			}
			else
			{
				$this->tpl->setVariable(
					'USR_IMG_SRC',
					ilObjUser::_getPersonalPicturePath($a_set['usr_id'],'xsmall')
				);
			}
		}
		
		
		foreach($this->getSelectedColumns() as $field)
		{			
			switch($field)
			{				
				case 'gender':
					$a_set['gender'] = $a_set['gender'] ? $this->lng->txt('gender_' . $a_set['gender']) : '';
					$this->tpl->setCurrentBlock('custom_fields');
					$this->tpl->setVariable('VAL_CUST', $a_set[$field]);
					$this->tpl->parseCurrentBlock();
					break;

				case 'birthday':
					$a_set['birthday'] = $a_set['birthday'] ? ilDatePresentation::formatDate(new ilDate($a_set['birthday'], IL_CAL_DATE)) : $this->lng->txt('no_date');
					$this->tpl->setCurrentBlock('custom_fields');
					$this->tpl->setVariable('VAL_CUST', $a_set[$field]);
					$this->tpl->parseCurrentBlock();
					break;		
				
				case 'access_until':
					$this->tpl->setCurrentBlock('custom_fields');
					$this->tpl->setVariable('CUST_CLASS', ' '.$a_set['access_class']);
					$this->tpl->setVariable('VAL_CUST', $a_set[$field]);
					$this->tpl->parseCurrentBlock();
					break;
				
				case 'last_login':
					$a_set['last_login'] = $a_set['last_login'] ? ilDatePresentation::formatDate(new ilDateTime($a_set['last_login'], IL_CAL_DATETIME)) : $this->lng->txt('no_date');
					$this->tpl->setCurrentBlock('custom_fields');
					$this->tpl->setVariable('VAL_CUST', $a_set[$field]);
					$this->tpl->parseCurrentBlock();
					break;				

				case 'login':
					if($this->admin_mode)
					{
						$ilCtrl->setParameterByClass("ilobjusergui", "ref_id", "7");
						$ilCtrl->setParameterByClass("ilobjusergui", "obj_id", $a_set["usr_id"]);
						$ilCtrl->setParameterByClass("ilobjusergui", "search", "1");
						$link = $ilCtrl->getLinkTargetByClass(array("iladministrationgui", "ilobjusergui"), "view");
						$a_set[$field] = "<a href=\"".$link."\">".$a_set[$field]."</a>";												
					}
					elseif($this->getType() == self::TYPE_GLOBAL_SEARCH)
					{
						if($link)
						{
							$this->tpl->setCurrentBlock('login_linked');
							$this->tpl->setVariable('LOGIN_NAME',$a_set[$field] ? $a_set[$field] : '');
							$this->tpl->setVariable('LOGIN_LINK',$link);
							$this->tpl->parseCurrentBlock();
							break;
						}
					}
					// fallthrough
				
				default:
					$this->tpl->setCurrentBlock('custom_fields');
					$this->tpl->setVariable('VAL_CUST', (string) ($a_set[$field] ? $a_set[$field] : ''));
					$this->tpl->parseCurrentBlock();
					break;
			}
		}
		
		if($this->getType() == self::TYPE_GLOBAL_SEARCH)
		{
			$this->tpl->setVariable('SEARCH_RELEVANCE',$this->getRelevanceHTML($a_set['relevance']));
		}

	}
	
	/**
	 * Parse user data
	 * @return 
	 * @param array $a_user_ids
	 */
	public function parseUserIds($a_user_ids)
	{
		if(!$a_user_ids)
		{
			$this->setData(array());
			return true;
		}

		$additional_fields = $this->getSelectedColumns();
		
		$parse_access = false;
		if(isset($additional_fields['access_until']))
		{
			$parse_access = true;
			unset($additional_fields['access_until']);
		}
		
		$udf_ids = $usr_data_fields = $odf_ids = array();
		foreach($additional_fields as $field)
		{
			if(substr($field, 0, 3) == 'udf')
			{
				$udf_ids[] = substr($field,4);
				continue;
			}
			$usr_data_fields[] = $field;
		}
		include_once './Services/User/classes/class.ilUserQuery.php';
		$usr_data = ilUserQuery::getUserListData(
				'login',
				'ASC',
				0,
				999999,
				'',
				'',
				null,
				false,
				false,
				0,
				0,
				null,
				$usr_data_fields,
				$a_user_ids
		);
		
		if($this->admin_mode && $parse_access)
		{
			// see ilUserTableGUI
			$current_time = time();
			foreach($usr_data['set'] as $k => $user)
			{					
				if ($user['active'])
				{
					if ($user["time_limit_unlimited"])
					{
						$txt_access = $this->lng->txt("access_unlimited");
						$usr_data["set"][$k]["access_class"] = "smallgreen";
					}
					elseif ($user["time_limit_until"] < $current_time)
					{
						$txt_access = $this->lng->txt("access_expired");
						$usr_data["set"][$k]["access_class"] = "smallred";
					}
					else
					{
						$txt_access = ilDatePresentation::formatDate(new ilDateTime($user["time_limit_until"],IL_CAL_UNIX));
						$usr_data["set"][$k]["access_class"] = "small";
					}
				}
				else
				{
					$txt_access = $this->lng->txt("inactive");
					$usr_data["set"][$k]["access_class"] = "smallred";
				}
				$usr_data["set"][$k]["access_until"] = $txt_access;
			}
		}
		
		// Custom user data fields
		if($udf_ids)
		{
			include_once './Services/User/classes/class.ilUserDefinedData.php';
			$data = ilUserDefinedData::lookupData($a_user_ids, $udf_ids);

			$users = array();
			$counter = 0;
			foreach($usr_data['set'] as $set)
			{
				$users[$counter] = $set;
				foreach($udf_ids as $udf_field)
				{
					$users[$counter]['udf_'.$udf_field] = $data[$set['usr_id']][$udf_field];
				}
				++$counter;
			}
		}
		else
		{
			$users = $usr_data['set'];
		}
		
		if($this->getType() == self::TYPE_GLOBAL_SEARCH)
		{
			if($this->getLuceneResult() instanceof ilLuceneSearchResult)
			{
				foreach($users as $counter => $ud)
				{
					$users[$counter]['relevance'] = $this->getLuceneResult()->getRelevance($ud['usr_id']);
				}
			}
		}
		
		$this->setData($users);
	}


	/**
	 * Get relevance html
	 */
	public function getRelevanceHTML($a_rel)
	{
		$tpl = new ilTemplate('tpl.lucene_relevance.html',true,true,'Services/Search');
		
		$width1 = (int) $a_rel;
		$width2 = (int) (100 - $width1);
		
		$tpl->setCurrentBlock('relevance');
		$tpl->setVariable('VAL_REL',sprintf("%d %%",$a_rel));
		$tpl->setVariable('WIDTH_A',$width1);
		$tpl->setVariable('WIDTH_B',$width2);
		$tpl->setVariable('IMG_A',ilUtil::getImagePath("relevance_blue.png"));
		$tpl->setVariable('IMG_B',ilUtil::getImagePath("relevance_dark.png"));
		$tpl->parseCurrentBlock();
		return $tpl->get();
	}
}
?>
