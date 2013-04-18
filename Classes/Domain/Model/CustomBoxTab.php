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
class CustomBoxTab extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Titel
	 *
	 * @var \string
	 */
	protected $boxtitle;

	/**
	 * Text
	 *
	 * @var \string
	 */
	protected $boxdescription;

	/**
	 * Class-Name
	 *
	 * @var \integer
	 */
	protected $boxclass;

	/**
	 * Returns the boxtitle
	 *
	 * @return \string $boxtitle
	 */
	public function getBoxtitle() {
		return $this->boxtitle;
	}

	/**
	 * Sets the boxtitle
	 *
	 * @param \string $boxtitle
	 * @return void
	 */
	public function setBoxtitle($boxtitle) {
		$this->boxtitle = $boxtitle;
	}

	/**
	 * Returns the boxdescription
	 *
	 * @return \string $boxdescription
	 */
	public function getBoxdescription() {
		return $this->boxdescription;
	}

	/**
	 * Sets the boxdescription
	 *
	 * @param \string $boxdescription
	 * @return void
	 */
	public function setBoxdescription($boxdescription) {
		$this->boxdescription = $boxdescription;
	}

	/**
	 * Returns the boxclass
	 *
	 * @return \integer $boxclass
	 */
	public function getBoxclass() {
		return $this->boxclass;
	}

	/**
	 * Sets the boxclass
	 *
	 * @param \integer $boxclass
	 * @return void
	 */
	public function setBoxclass($boxclass) {
		$this->boxclass = $boxclass;
	}

}
?>