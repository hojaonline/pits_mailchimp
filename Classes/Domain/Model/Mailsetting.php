<?php
namespace TYPO3\PitsMailchimp\Domain\Model;


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
 * Mailsetting
 */
class Mailsetting extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * listname
	 * 
	 * @var string
	 */
	protected $listname = '';

	/**
	 * apikey
	 * 
	 * @var string
	 */
	protected $apikey = '';

	/**
	 * listid
	 * 
	 * @var string
	 */
	protected $listid = '';

	/**
	 * userpid
	 * 
	 * @var integer
	 */
	protected $userpid = 0;

	/**
	 * syncdetails
	 * 
	 * @var string
	 */
	protected $syncdetails = '';

	/**
	 * chimpusers
	 * 
	 * @var \TYPO3\PitsMailchimp\Domain\Model\Chimpusers
	 */
	protected $chimpusers = NULL;

	/**
	 * Returns the listname
	 * 
	 * @return string $listname
	 */
	public function getListname() {
		return $this->listname;
	}

	/**
	 * Sets the listname
	 * 
	 * @param string $listname
	 * @return void
	 */
	public function setListname($listname) {
		$this->listname = $listname;
	}

	/**
	 * Returns the apikey
	 * 
	 * @return string $apikey
	 */
	public function getApikey() {
		return $this->apikey;
	}

	/**
	 * Sets the apikey
	 * 
	 * @param string $apikey
	 * @return void
	 */
	public function setApikey($apikey) {
		$this->apikey = $apikey;
	}

	/**
	 * Returns the listid
	 * 
	 * @return string $listid
	 */
	public function getListid() {
		return $this->listid;
	}

	/**
	 * Sets the listid
	 * 
	 * @param string $listid
	 * @return void
	 */
	public function setListid($listid) {
		$this->listid = $listid;
	}

	/**
	 * Returns the userpid
	 * 
	 * @return integer $userpid
	 */
	public function getUserpid() {
		return $this->userpid;
	}

	/**
	 * Sets the userpid
	 * 
	 * @param integer $userpid
	 * @return void
	 */
	public function setUserpid($userpid) {
		$this->userpid = $userpid;
	}

	/**
	 * Returns the syncdetails
	 * 
	 * @return string $syncdetails
	 */
	public function getSyncdetails() {
		return $this->syncdetails;
	}

	/**
	 * Sets the syncdetails
	 * 
	 * @param string $syncdetails
	 * @return void
	 */
	public function setSyncdetails($syncdetails) {
		$this->syncdetails = $syncdetails;
	}

	/**
	 * Returns the chimpusers
	 * 
	 * @return \TYPO3\PitsMailchimp\Domain\Model\Chimpusers $chimpusers
	 */
	public function getChimpusers() {
		return $this->chimpusers;
	}

	/**
	 * Sets the chimpusers
	 * 
	 * @param \TYPO3\PitsMailchimp\Domain\Model\Chimpusers $chimpusers
	 * @return void
	 */
	public function setChimpusers(\TYPO3\PitsMailchimp\Domain\Model\Chimpusers $chimpusers) {
		$this->chimpusers = $chimpusers;
	}

}