<?php
namespace TYPO3\PitsMailchimp\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 HOJA M A <hoja.ma@pitsolutions.com>, PIT Solutions Private Limited
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * MailsettingController
 */
class MailsettingController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		$mailsettings = $this->mailsettingRepository->findAll();
		$this->view->assign('mailsettings', $mailsettings);
	}

	/**
	 * action show
	 * 
	 * @param \TYPO3\PitsMailchimp\Domain\Model\Mailsetting $mailsetting
	 * @return void
	 */
	public function showAction(\TYPO3\PitsMailchimp\Domain\Model\Mailsetting $mailsetting) {
		$this->view->assign('mailsetting', $mailsetting);
	}

	/**
	 * action new
	 * 
	 * @param \TYPO3\PitsMailchimp\Domain\Model\Mailsetting $newMailsetting
	 * @ignorevalidation $newMailsetting
	 * @return void
	 */
	public function newAction(\TYPO3\PitsMailchimp\Domain\Model\Mailsetting $newMailsetting = NULL) {
		$this->view->assign('newMailsetting', $newMailsetting);
	}

	/**
	 * action create
	 * 
	 * @param \TYPO3\PitsMailchimp\Domain\Model\Mailsetting $newMailsetting
	 * @return void
	 */
	public function createAction(\TYPO3\PitsMailchimp\Domain\Model\Mailsetting $newMailsetting) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->mailsettingRepository->add($newMailsetting);
		$this->redirect('list');
	}

	/**
	 * action edit
	 * 
	 * @param \TYPO3\PitsMailchimp\Domain\Model\Mailsetting $mailsetting
	 * @ignorevalidation $mailsetting
	 * @return void
	 */
	public function editAction(\TYPO3\PitsMailchimp\Domain\Model\Mailsetting $mailsetting) {
		$this->view->assign('mailsetting', $mailsetting);
	}

	/**
	 * action update
	 * 
	 * @param \TYPO3\PitsMailchimp\Domain\Model\Mailsetting $mailsetting
	 * @return void
	 */
	public function updateAction(\TYPO3\PitsMailchimp\Domain\Model\Mailsetting $mailsetting) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->mailsettingRepository->update($mailsetting);
		$this->redirect('list');
	}

	/**
	 * action delete
	 * 
	 * @param \TYPO3\PitsMailchimp\Domain\Model\Mailsetting $mailsetting
	 * @return void
	 */
	public function deleteAction(\TYPO3\PitsMailchimp\Domain\Model\Mailsetting $mailsetting) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->mailsettingRepository->remove($mailsetting);
		$this->redirect('list');
	}

}