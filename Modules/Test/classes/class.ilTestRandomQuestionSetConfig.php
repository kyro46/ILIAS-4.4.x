<?php
/* Copyright (c) 1998-2013 ILIAS open source, Extended GPL, see docs/LICENSE */

require_once 'Modules/Test/classes/class.ilTestQuestionSetConfig.php';

/**
 * class that manages/holds the data for a question set configuration for continues tests
 *
 * @author		Björn Heyser <bheyser@databay.de>
 * @version		$Id$
 *
 * @package		Modules/Test
 */
class ilTestRandomQuestionSetConfig extends ilTestQuestionSetConfig
{
	const QUESTION_AMOUNT_CONFIG_MODE_PER_TEST = 'TEST';
	const QUESTION_AMOUNT_CONFIG_MODE_PER_POOL = 'POOL';
	
	/**
	 * @var boolean
	 */
	private $requirePoolsWithHomogeneousScoredQuestions = null;
	
	/**
	 * @var string
	 */
	private $questionAmountConfigurationMode = null;
	
	/**
	 * @var integer
	 */
	private $questionAmountPerTest = null;
	
	/**
	 * @var integer
	 */
	private $lastQuestionSyncTimestamp = null;

	/**
	 * @param ilTree $tree
	 * @param ilDB $db
	 * @param ilPluginAdmin $pluginAdmin
	 * @param ilObjTest $testOBJ
	 */
	public function __construct(ilTree $tree, ilDB $db, ilPluginAdmin $pluginAdmin, ilObjTest $testOBJ)
	{
		parent::__construct($tree, $db, $pluginAdmin, $testOBJ);
	}

	/**
	 * @param boolean $requirePoolsWithHomogeneousScoredQuestions
	 */
	public function setPoolsWithHomogeneousScoredQuestionsRequired($requirePoolsWithHomogeneousScoredQuestions)
	{
		$this->requirePoolsWithHomogeneousScoredQuestions = $requirePoolsWithHomogeneousScoredQuestions;
	}
	
	/**
	 * @return boolean
	 */
	public function arePoolsWithHomogeneousScoredQuestionsRequired()
	{
		return $this->requirePoolsWithHomogeneousScoredQuestions;
	}
	
	/**
	 * @param string $questionAmountConfigurationMode
	 */
	public function setQuestionAmountConfigurationMode($questionAmountConfigurationMode)
	{
		$this->questionAmountConfigurationMode = $questionAmountConfigurationMode;
	}
	
	/**
	 * @return string
	 */
	public function getQuestionAmountConfigurationMode()
	{
		return $this->questionAmountConfigurationMode;
	}
	
	/**
	 * @return boolean
	 */
	public function isQuestionAmountConfigurationModePerPool()
	{
		return $this->getQuestionAmountConfigurationMode() == self::QUESTION_AMOUNT_CONFIG_MODE_PER_POOL;
	}
	
	/**
	 * @param integer $questionAmountPerTest
	 */
	public function setQuestionAmountPerTest($questionAmountPerTest)
	{
		$this->questionAmountPerTest = $questionAmountPerTest;
	}
	
	/**
	 * @return integer
	 */
	public function getQuestionAmountPerTest()
	{
		return $this->questionAmountPerTest;
	}
	
	/**
	 * @param integer $lastQuestionSyncTimestamp
	 */
	public function setLastQuestionSyncTimestamp($lastQuestionSyncTimestamp)
	{
		$this->lastQuestionSyncTimestamp = $lastQuestionSyncTimestamp;
	}
	
	/**
	 * @return integer
	 */
	public function getLastQuestionSyncTimestamp()
	{
		return $this->lastQuestionSyncTimestamp;
	}
	
	// -----------------------------------------------------------------------------------------------------------------
	
	/**
	 * initialises the current object instance with values
	 * from matching properties within the passed array
	 * 
	 * @param array $dataArray
	 */
	public function initFromArray($dataArray)
	{
		foreach($dataArray as $field => $value)
		{
			switch($field)
			{
				case 'req_pools_homo_scored':		$this->setPoolsWithHomogeneousScoredQuestionsRequired($value);	break;
				case 'quest_amount_cfg_mode':		$this->setQuestionAmountConfigurationMode($value);				break;
				case 'quest_amount_per_test':		$this->setQuestionAmountPerTest($value);						break;
				case 'quest_sync_timestamp':		$this->setLastQuestionSyncTimestamp($value);					break;
			}
		}
	}
	
	/**
	 * loads the question set config for current test from the database
	 * 
	 * @return boolean
	 */
	public function loadFromDb()
	{
		$res = $this->db->queryF(
				"SELECT * FROM tst_rnd_quest_set_cfg WHERE test_fi = %s",
				array('integer'), array($this->testOBJ->getTestId())
		);
		
		while( $row = $this->db->fetchAssoc($res) )
		{
			$this->initFromArray($row);
			
			return true;
		}
		
		return false;
	}
	
	/**
	 * saves the question set config for current test to the database
	 * 
	 * @return boolean
	 */
	public function saveToDb()
	{
		if( $this->dbRecordExists($this->testOBJ->getTestId()) )
		{
			$this->updateDbRecord($this->testOBJ->getTestId());
		}
		else
		{
			$this->insertDbRecord($this->testOBJ->getTestId());
		}
	}

	/**
	 * saves the question set config for test with given id to the database
	 *
	 * @param $testId
	 */
	public function saveToDbByTestId($testId)
	{
		if( $this->dbRecordExists($testId) )
		{
			$this->updateDbRecord($testId);
		}
		else
		{
			$this->insertDbRecord($testId);
		}
	}

	/**
	 * deletes the question set config for current test from the database
	 */
	public function deleteFromDb()
	{
		$this->db->manipulateF(
				"DELETE FROM tst_rnd_quest_set_cfg WHERE test_fi = %s",
				array('integer'), array($this->testOBJ->getTestId())
		);
	}

	// -----------------------------------------------------------------------------------------------------------------

	/**
	 * checks wether a question set config for current test exists in the database
	 *
	 * @param $testId
	 * @return boolean
	 */
	private function dbRecordExists($testId)
	{
		$res = $this->db->queryF(
			"SELECT COUNT(*) cnt FROM tst_rnd_quest_set_cfg WHERE test_fi = %s",
			array('integer'), array($testId)
		);
		
		$row = $this->db->fetchAssoc($res);
		
		return (bool)$row['cnt'];
	}

	/**
	 * updates the record in the database that corresponds
	 * to the question set config for the current test
	 *
	 * @param $testId
	 */
	private function updateDbRecord($testId)
	{
		$this->db->update('tst_rnd_quest_set_cfg',
			array(
				'req_pools_homo_scored' => array('integer', (int)$this->arePoolsWithHomogeneousScoredQuestionsRequired()),
				'quest_amount_cfg_mode' => array('text', $this->getQuestionAmountConfigurationMode()),
				'quest_amount_per_test' => array('integer', (int)$this->getQuestionAmountPerTest()),
				'quest_sync_timestamp' => array('integer', (int)$this->getLastQuestionSyncTimestamp())
			),
			array(
				'test_fi' => array('integer', $testId)
			)
		);
	}
	
	/**
	 * inserts a new record for the question set config
	 * for the current test into the database
	 *
	 * @param $testId
	 */
	private function insertDbRecord($testId)
	{
		$this->db->insert('tst_rnd_quest_set_cfg', array(
			'test_fi' => array('integer', $testId),
			'req_pools_homo_scored' => array('integer', (int)$this->arePoolsWithHomogeneousScoredQuestionsRequired()),
			'quest_amount_cfg_mode' => array('text', $this->getQuestionAmountConfigurationMode()),
			'quest_amount_per_test' => array('integer', (int)$this->getQuestionAmountPerTest()),
			'quest_sync_timestamp' => array('integer', (int)$this->getLastQuestionSyncTimestamp())
		));
	}

	// -----------------------------------------------------------------------------------------------------------------

	public function isQuestionSetConfigured()
	{
		if( !$this->isQuestionAmountConfigComplete() )
		{
			return false;
		}

		if( !$this->hasSourcePoolDefinitions() )
		{
			return false;
		}

		if( !$this->isQuestionSetBuildable() )
		{
			return false;
		}

		return true;
	}

	public function isQuestionAmountConfigComplete()
	{
		if( $this->isQuestionAmountConfigurationModePerPool() )
		{
			$sourcePoolDefinitionList = $this->buildSourcePoolDefinitionList();

			$sourcePoolDefinitionList->loadDefinitions();

			foreach($sourcePoolDefinitionList as $definition)
			{
				/** @var ilTestRandomQuestionSetSourcePoolDefinition $definition */

				if( $definition->getQuestionAmount() < 1 )
				{
					return false;
				}
			}
		}
		elseif( $this->getQuestionAmountPerTest() < 1 )
		{
			return false;
		}

		return true;
	}

	public function hasSourcePoolDefinitions()
	{
		$sourcePoolDefinitionList = $this->buildSourcePoolDefinitionList();

		return $sourcePoolDefinitionList->savedDefinitionsExist();
	}

	public function isQuestionSetBuildable()
	{
		$sourcePoolDefinitionList = $this->buildSourcePoolDefinitionList();
		$sourcePoolDefinitionList->loadDefinitions();

		require_once 'Modules/Test/classes/class.ilTestRandomQuestionSetStagingPoolQuestionList.php';
		$stagingPoolQuestionList = new ilTestRandomQuestionSetStagingPoolQuestionList($this->db, $this->pluginAdmin);

		require_once 'Modules/Test/classes/class.ilTestRandomQuestionSetBuilder.php';
		$questionSetBuilder = ilTestRandomQuestionSetBuilder::getInstance($this->db, $this->testOBJ, $this, $sourcePoolDefinitionList, $stagingPoolQuestionList);

		return $questionSetBuilder->checkBuildable();
	}
	
	public function doesQuestionSetRelatedDataExist()
	{
		if( $this->dbRecordExists($this->testOBJ->getTestId()) )
		{
			return true;
		}

		$sourcePoolDefinitionList = $this->buildSourcePoolDefinitionList();

		if( $sourcePoolDefinitionList->savedDefinitionsExist() )
		{
			return true;
		}

		return false;
	}
	
	public function removeQuestionSetRelatedData()
	{
		$sourcePoolDefinitionList = $this->buildSourcePoolDefinitionList();
		$sourcePoolDefinitionList->deleteDefinitions();

		require_once 'Modules/Test/classes/class.ilTestRandomQuestionSetStagingPoolBuilder.php';
		$stagingPool = new ilTestRandomQuestionSetStagingPoolBuilder(
			$this->db, $this->testOBJ
		);

		$stagingPool->reset();

		$this->deleteFromDb();
	}

	/**
	 * removes all question set config related data for cloned/copied test
	 *
	 * @param ilObjTest $cloneTestOBJ
	 */
	public function cloneQuestionSetRelatedData($cloneTestOBJ)
	{
		$this->loadFromDb();
		$this->saveToDbByTestId($cloneTestOBJ->getTestId());

		$sourcePoolDefinitionList = $this->buildSourcePoolDefinitionList();
		$sourcePoolDefinitionList->loadDefinitions();
		$sourcePoolDefinitionList->saveDefinitionsByTestId($cloneTestOBJ->getTestId());

		// TODO: implement cloning of staging pool and taxonomies (wasn't implemented all the time ^^)
	}


	private function buildSourcePoolDefinitionList()
	{
		require_once 'Modules/Test/classes/class.ilTestRandomQuestionSetSourcePoolDefinitionFactory.php';
		$sourcePoolDefinitionFactory = new ilTestRandomQuestionSetSourcePoolDefinitionFactory(
			$this->db, $this->testOBJ
		);

		require_once 'Modules/Test/classes/class.ilTestRandomQuestionSetSourcePoolDefinitionList.php';
		$sourcePoolDefinitionList = new ilTestRandomQuestionSetSourcePoolDefinitionList(
			$this->db, $this->testOBJ, $sourcePoolDefinitionFactory
		);

		return $sourcePoolDefinitionList;
	}
	
	// -----------------------------------------------------------------------------------------------------------------
}
