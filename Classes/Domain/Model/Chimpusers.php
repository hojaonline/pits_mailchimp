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
 * Chimpusers
 */
class Chimpusers extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * firstname
	 * 
	 * @var string
	 */
	protected $firstname = '';

	/**
	 * lastname
	 * 
	 * @var string
	 */
	protected $lastname = '';

	/**
	 * email
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $email = '';

	/**
	 * Returns the firstname
	 * 
	 * @return string $firstname
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Sets the firstname
	 * 
	 * @param string $firstname
	 * @return void
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	/**
	 * Returns the lastname
	 * 
	 * @return string $lastname
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * Sets the lastname
	 * 
	 * @param string $lastname
	 * @return void
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	/**
	 * Returns the email
	 * 
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 * 
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

}