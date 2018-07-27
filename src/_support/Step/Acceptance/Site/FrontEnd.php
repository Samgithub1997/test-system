<?php
/**
 * @package     Joomla.Test
 * @subpackage  AcceptanceTester.Step
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace Step\Acceptance\Site;

use Page\Acceptance\Site\FrontPage;

/**
 * Acceptance Step object class contains suits for Front End.
 *
 * @package  Step\Acceptance\Administrator
 *
 * @since    4.0.0
 */
class FrontEnd extends \AcceptanceTester
{
	/**
	 * Check whether Item is not Visible on front end
	 *
	 * @param   \AcceptanceTester $I             The Acceptance Tester
	 * @param   string            $itemName  Menu Item Name
	 *
	 * @return void
	 */
	public static function notVisible(\AcceptanceTester $I, $itemName)
	{
		$I->comment('Make sure the menu item is not on site After unpublishing it');
		$I->amOnPage(FrontPage::$url);
		// Assertion
		$I->dontSee($itemName);
	}

	/**
	 * Check whether Item is Visible on front end
	 *
	 * @param   \AcceptanceTester $I            Acceptance Tester
	 * @param   string            $itemName Menu Item Name
	 *
	 * @return void
	 */
	public static function isVisible(\AcceptanceTester $I, $itemName)
	{
		$I->comment('Check the menu item on site After publishing it');
		$I->amOnPage(FrontPage::$url);
		// Assertion
		$I->see($itemName);
	}

	/**
	 * Check whether article is not Visible on front end
	 *
	 * @param   \AcceptanceTester $I             The Acceptance Tester
	 * @param   string            $menuItemName  Menu Item Name
	 * @param   string            $articleName   Article Name
	 *
	 * @return void
	 */
	public static function articleIsVisible(\AcceptanceTester $I, $menuItemName, $articleName)
	{
		$I->comment('Check the menu item on site After publishing it');
		$I->amOnPage(FrontPage::$url);
		$I->see($menuItemName);
		$I->click($menuItemName);
		$I->see($articleName);
	}

	/**
	 * Check whether article is not Visible on front end
	 *
	 * @param   \AcceptanceTester $I             The Acceptance Tester
	 * @param   string            $menuItemName  Menu Item Name
	 * @param   string            $articleName   Article Name
	 *
	 * @return void
	 */
	public static function articleIsNotVisible(\AcceptanceTester $I, $menuItemName, $articleName)
	{
		$I->comment('Check the menu item on site After publishing it');
		$I->amOnPage(FrontPage::$url);
		$I->see($menuItemName);
		$I->click($menuItemName);
		$I->dontSee($articleName);
	}
}