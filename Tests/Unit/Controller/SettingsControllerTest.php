<?php
namespace TYPO3\PitsMailchimp\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 HOJA M A <hoja.ma@pitsolutions.com>, PIT Solutions Private Limited
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class TYPO3\PitsMailchimp\Controller\SettingsController.
 *
 * @author HOJA M A <hoja.ma@pitsolutions.com>
 */
class SettingsControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \TYPO3\PitsMailchimp\Controller\SettingsController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('TYPO3\\PitsMailchimp\\Controller\\SettingsController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllSettingssFromRepositoryAndAssignsThemToView() {

		$allSettingss = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$settingsRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$settingsRepository->expects($this->once())->method('findAll')->will($this->returnValue($allSettingss));
		$this->inject($this->subject, 'settingsRepository', $settingsRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('settingss', $allSettingss);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenSettingsToView() {
		$settings = new \TYPO3\PitsMailchimp\Domain\Model\Settings();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('settings', $settings);

		$this->subject->showAction($settings);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenSettingsToView() {
		$settings = new \TYPO3\PitsMailchimp\Domain\Model\Settings();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newSettings', $settings);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($settings);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenSettingsToSettingsRepository() {
		$settings = new \TYPO3\PitsMailchimp\Domain\Model\Settings();

		$settingsRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$settingsRepository->expects($this->once())->method('add')->with($settings);
		$this->inject($this->subject, 'settingsRepository', $settingsRepository);

		$this->subject->createAction($settings);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenSettingsToView() {
		$settings = new \TYPO3\PitsMailchimp\Domain\Model\Settings();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('settings', $settings);

		$this->subject->editAction($settings);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenSettingsInSettingsRepository() {
		$settings = new \TYPO3\PitsMailchimp\Domain\Model\Settings();

		$settingsRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$settingsRepository->expects($this->once())->method('update')->with($settings);
		$this->inject($this->subject, 'settingsRepository', $settingsRepository);

		$this->subject->updateAction($settings);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenSettingsFromSettingsRepository() {
		$settings = new \TYPO3\PitsMailchimp\Domain\Model\Settings();

		$settingsRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$settingsRepository->expects($this->once())->method('remove')->with($settings);
		$this->inject($this->subject, 'settingsRepository', $settingsRepository);

		$this->subject->deleteAction($settings);
	}
}
