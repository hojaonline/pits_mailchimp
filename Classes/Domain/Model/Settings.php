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
 * Settings
 */
class Settings extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * property
	 * 
	 * @var string
	 */
	protected $property = '';

	/**
	 * value
	 * 
	 * @var string
	 */
	protected $value = '';

	/**
	 * Returns the property
	 * 
	 * @return string $property
	 */
	public function getProperty() {
		return $this->property;
	}

	/**
	 * Sets the property
	 * 
	 * @param string $property
	 * @return void
	 */
	public function setProperty($property) {
		$this->property = $property;
	}

	/**
	 * Returns the value
	 * 
	 * @return string $value
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Sets the value
	 * 
	 * @param string $value
	 * @return void
	 */
	public function setValue($value) {
		$this->value = $value;
	}

}