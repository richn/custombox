<?php
namespace TYPO3\Custombox\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
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
 *
 *
 * @package custombox
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class CustomBox extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Box Inhalt
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Custombox\Domain\Model\BoxInhalt>
	 * @lazy
	 */
	protected $boxinhalt;

	/**
	 * sorting 
	 * @var int
	 * @validate NotEmpty
	 */
    protected $sorting;

	/**
	 * __construct
	 *
	 * @return CustomBox
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->boxinhalt = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Adds a BoxInhalt
	 *
	 * @param \TYPO3\Custombox\Domain\Model\BoxInhalt $boxinhalt
	 * @return void
	 */
	public function addBoxinhalt(\TYPO3\Custombox\Domain\Model\BoxInhalt $boxinhalt) {
		$this->boxinhalt->attach($boxinhalt);
	}

	/**
	 * Removes a BoxInhalt
	 *
	 * @param \TYPO3\Custombox\Domain\Model\BoxInhalt $boxinhaltToRemove The BoxInhalt to be removed
	 * @return void
	 */
	public function removeBoxinhalt(\TYPO3\Custombox\Domain\Model\BoxInhalt $boxinhaltToRemove) {
		$this->boxinhalt->detach($boxinhaltToRemove);
	}

	/**
	 * Returns the sorting
	 *
	 * @return int $sorting
	 */
    public function getSorting() {
    return $this->sorting;
    }

	/**
	 * Returns the boxinhalt
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Custombox\Domain\Model\BoxInhalt> $boxinhalt
	 */
	public function getBoxinhalt() {
		return $this->boxinhalt;
	}

	/**
	 * Sets the boxinhalt
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Custombox\Domain\Model\BoxInhalt> $boxinhalt
	 * @return void
	 */
	public function setBoxinhalt(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $boxinhalt) {
		$this->boxinhalt = $boxinhalt;
	}

}

?>