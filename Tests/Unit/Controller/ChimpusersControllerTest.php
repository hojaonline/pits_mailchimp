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
 * Test case for class TYPO3\PitsMailchimp\Controller\ChimpusersController.
 *
 * @author HOJA M A <hoja.ma@pitsolutions.com>
 */
class ChimpusersControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \TYPO3\PitsMailchimp\Controller\ChimpusersController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('TYPO3\\PitsMailchimp\\Controller\\ChimpusersController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllChimpuserssFromRepositoryAndAssignsThemToView() {

		$allChimpuserss = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$chimpusersRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$chimpusersRepository->expects($this->once())->method('findAll')->will($this->returnValue($allChimpuserss));
		$this->inject($this->subject, 'chimpusersRepository', $chimpusersRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('chimpuserss', $allChimpuserss);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenChimpusersToView() {
		$chimpusers = new \TYPO3\PitsMailchimp\Domain\Model\Chimpusers();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('chimpusers', $chimpusers);

		$this->subject->showAction($chimpusers);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenChimpusersToView() {
		$chimpusers = new \TYPO3\PitsMailchimp\Domain\Model\Chimpusers();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newChimpusers', $chimpusers);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($chimpusers);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenChimpusersToChimpusersRepository() {
		$chimpusers = new \TYPO3\PitsMailchimp\Domain\Model\Chimpusers();

		$chimpusersRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$chimpusersRepository->expects($this->once())->method('add')->with($chimpusers);
		$this->inject($this->subject, 'chimpusersRepository', $chimpusersRepository);

		$this->subject->createAction($chimpusers);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenChimpusersToView() {
		$chimpusers = new \TYPO3\PitsMailchimp\Domain\Model\Chimpusers();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('chimpusers', $chimpusers);

		$this->subject->editAction($chimpusers);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenChimpusersInChimpusersRepository() {
		$chimpusers = new \TYPO3\PitsMailchimp\Domain\Model\Chimpusers();

		$chimpusersRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$chimpusersRepository->expects($this->once())->method('update')->with($chimpusers);
		$this->inject($this->subject, 'chimpusersRepository', $chimpusersRepository);

		$this->subject->updateAction($chimpusers);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenChimpusersFromChimpusersRepository() {
		$chimpusers = new \TYPO3\PitsMailchimp\Domain\Model\Chimpusers();

		$chimpusersRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$chimpusersRepository->expects($this->once())->method('remove')->with($chimpusers);
		$this->inject($this->subject, 'chimpusersRepository', $chimpusersRepository);

		$this->subject->deleteAction($chimpusers);
	}
}
