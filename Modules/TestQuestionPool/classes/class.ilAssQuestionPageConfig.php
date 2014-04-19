<?php
/* Copyright (c) 1998-2013 ILIAS open source, Extended GPL, see docs/LICENSE */

include_once('./Services/COPage/classes/class.ilPageConfig.php');

/**
 * Question page configuration 
 *
 * @author Alex Killing <alex.killing@gmx.de>
 * 
 * @version $Id$
 * 
 * @ingroup ModulesTestQuestionPool
 */
class ilAssQuestionPageConfig extends ilPageConfig
{
	/**
	 * Init
	 */
	function init()
	{
		$this->setEnablePCType('Tabs', false);
		$this->setEnableInternalLinks(false);
	}
}
