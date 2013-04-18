<?php

namespace TYPO3\Custombox\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
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
 * Test case for class \TYPO3\Custombox\Domain\Model\CustomBoxTab.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Custom Box
 *
 */
class CustomBoxTabTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Custombox\Domain\Model\CustomBoxTab
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Custombox\Domain\Model\CustomBoxTab();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getBoxtitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBoxtitleForStringSetsBoxtitle() { 
		$this->fixture->setBoxtitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBoxtitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getBoxdescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBoxdescriptionForStringSetsBoxdescription() { 
		$this->fixture->setBoxdescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBoxdescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getBoxclassReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getBoxclass()
		);
	}

	/**
	 * @test
	 */
	public function setBoxclassForIntegerSetsBoxclass() { 
		$this->fixture->setBoxclass(12);

		$this->assertSame(
			12,
			$this->fixture->getBoxclass()
		);
	}
	
}
?>