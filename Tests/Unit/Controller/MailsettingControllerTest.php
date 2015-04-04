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
 * Test case for class TYPO3\PitsMailchimp\Controller\MailsettingController.
 *
 * @author HOJA M A <hoja.ma@pitsolutions.com>
 */
class MailsettingControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \TYPO3\PitsMailchimp\Controller\MailsettingController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('TYPO3\\PitsMailchimp\\Controller\\MailsettingController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllMailsettingsFromRepositoryAndAssignsThemToView() {

		$allMailsettings = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$mailsettingRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$mailsettingRepository->expects($this->once())->method('findAll')->will($this->returnValue($allMailsettings));
		$this->inject($this->subject, 'mailsettingRepository', $mailsettingRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('mailsettings', $allMailsettings);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenMailsettingToView() {
		$mailsetting = new \TYPO3\PitsMailchimp\Domain\Model\Mailsetting();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('mailsetting', $mailsetting);

		$this->subject->showAction($mailsetting);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenMailsettingToView() {
		$mailsetting = new \TYPO3\PitsMailchimp\Domain\Model\Mailsetting();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newMailsetting', $mailsetting);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($mailsetting);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenMailsettingToMailsettingRepository() {
		$mailsetting = new \TYPO3\PitsMailchimp\Domain\Model\Mailsetting();

		$mailsettingRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$mailsettingRepository->expects($this->once())->method('add')->with($mailsetting);
		$this->inject($this->subject, 'mailsettingRepository', $mailsettingRepository);

		$this->subject->createAction($mailsetting);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenMailsettingToView() {
		$mailsetting = new \TYPO3\PitsMailchimp\Domain\Model\Mailsetting();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('mailsetting', $mailsetting);

		$this->subject->editAction($mailsetting);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenMailsettingInMailsettingRepository() {
		$mailsetting = new \TYPO3\PitsMailchimp\Domain\Model\Mailsetting();

		$mailsettingRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$mailsettingRepository->expects($this->once())->method('update')->with($mailsetting);
		$this->inject($this->subject, 'mailsettingRepository', $mailsettingRepository);

		$this->subject->updateAction($mailsetting);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenMailsettingFromMailsettingRepository() {
		$mailsetting = new \TYPO3\PitsMailchimp\Domain\Model\Mailsetting();

		$mailsettingRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$mailsettingRepository->expects($this->once())->method('remove')->with($mailsetting);
		$this->inject($this->subject, 'mailsettingRepository', $mailsettingRepository);

		$this->subject->deleteAction($mailsetting);
	}
}
