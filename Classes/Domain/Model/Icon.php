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
class Icon extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Icon Name
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $iconname;

	/**
	 * Icon Class
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $iconclass;

	/**
	 * Content
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $iconcontent;

	/**
	 * Returns the iconname
	 *
	 * @return \string $iconname
	 */
	public function getIconname() {
		return $this->iconname;
	}

	/**
	 * Sets the iconname
	 *
	 * @param \string $iconname
	 * @return void
	 */
	public function setIconname($iconname) {
		$this->iconname = $iconname;
	}

	/**
	 * Returns the iconclass
	 *
	 * @return \string $iconclass
	 */
	public function getIconclass() {
		return $this->iconclass;
	}

	/**
	 * Sets the iconclass
	 *
	 * @param \string $iconclass
	 * @return void
	 */
	public function setIconclass($iconclass) {
		$this->iconclass = $iconclass;
	}

	/**
	 * Returns the iconcontent
	 *
	 * @return \string $iconcontent
	 */
	public function getIconcontent() {
		return $this->iconcontent;
	}

	/**
	 * Sets the iconcontent
	 *
	 * @param \string $iconcontent
	 * @return void
	 */
	public function setIconcontent($iconcontent) {
		$this->iconcontent = $iconcontent;
	}

}
?>