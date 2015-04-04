<?php

namespace TYPO3\PitsMailchimp\Tests\Unit\Domain\Model;

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
 * Test case for class \TYPO3\PitsMailchimp\Domain\Model\Mailsetting.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author HOJA M A <hoja.ma@pitsolutions.com>
 */
class MailsettingTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \TYPO3\PitsMailchimp\Domain\Model\Mailsetting
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \TYPO3\PitsMailchimp\Domain\Model\Mailsetting();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getListnameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getListname()
		);
	}

	/**
	 * @test
	 */
	public function setListnameForStringSetsListname() {
		$this->subject->setListname('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'listname',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getApikeyReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getApikey()
		);
	}

	/**
	 * @test
	 */
	public function setApikeyForStringSetsApikey() {
		$this->subject->setApikey('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'apikey',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getListidReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getListid()
		);
	}

	/**
	 * @test
	 */
	public function setListidForStringSetsListid() {
		$this->subject->setListid('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'listid',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUserpidReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getUserpid()
		);
	}

	/**
	 * @test
	 */
	public function setUserpidForIntegerSetsUserpid() {
		$this->subject->setUserpid(12);

		$this->assertAttributeEquals(
			12,
			'userpid',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSyncdetailsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSyncdetails()
		);
	}

	/**
	 * @test
	 */
	public function setSyncdetailsForStringSetsSyncdetails() {
		$this->subject->setSyncdetails('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'syncdetails',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getChimpusersReturnsInitialValueForChimpusers() {
		$this->assertEquals(
			NULL,
			$this->subject->getChimpusers()
		);
	}

	/**
	 * @test
	 */
	public function setChimpusersForChimpusersSetsChimpusers() {
		$chimpusersFixture = new \TYPO3\PitsMailchimp\Domain\Model\Chimpusers();
		$this->subject->setChimpusers($chimpusersFixture);

		$this->assertAttributeEquals(
			$chimpusersFixture,
			'chimpusers',
			$this->subject
		);
	}
}
