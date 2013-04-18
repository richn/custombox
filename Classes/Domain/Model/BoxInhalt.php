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
class BoxInhalt extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Titel
	 *
	 * @var \string
	 */
	protected $title;

	/**
	 * Text
	 *
	 * @var \string
	 */
	protected $text;

	/**
	 * link
	 *
	 * @var \string
	 */
	protected $link;

	/**
	 * Special Box
	 *
	 * @var boolean
	 */
	protected $special = FALSE;

	/**
	 * Überschrift
	 *
	 * @var boolean
	 */
	protected $ueberschrift = FALSE;

	/**
	 * Leer (hinter Überschrift)
	 *
	 * @var boolean
	 */
	protected $leer = FALSE;

	/**
	 * Bild
	 *
	 * @var \string
	 */
	protected $bild;

	/**
	 * Nur Titel?
	 *
	 * @var boolean
	 */
	protected $titleonly = FALSE;

	/**
	 * icon
	 *
	 * @var \TYPO3\Custombox\Domain\Model\Icon
	 */
	protected $icon;

	/**
	 * Returns the title
	 *
	 * @return \string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param \string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the text
	 *
	 * @return \string $text
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Sets the text
	 *
	 * @param \string $text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}

	/**
	 * Returns the link
	 *
	 * @return \string $link
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * Sets the link
	 *
	 * @param \string $link
	 * @return void
	 */
	public function setLink($link) {
		$this->link = $link;
	}

	/**
	 * Returns the special
	 *
	 * @return boolean $special
	 */
	public function getSpecial() {
		return $this->special;
	}

	/**
	 * Sets the special
	 *
	 * @param boolean $special
	 * @return void
	 */
	public function setSpecial($special) {
		$this->special = $special;
	}

	/**
	 * Returns the boolean state of special
	 *
	 * @return boolean
	 */
	public function isSpecial() {
		return $this->getSpecial();
	}

	/**
	 * Returns the ueberschrift
	 *
	 * @return boolean $ueberschrift
	 */
	public function getUeberschrift() {
		return $this->ueberschrift;
	}

	/**
	 * Sets the ueberschrift
	 *
	 * @param boolean $ueberschrift
	 * @return void
	 */
	public function setUeberschrift($ueberschrift) {
		$this->ueberschrift = $ueberschrift;
	}

	/**
	 * Returns the boolean state of ueberschrift
	 *
	 * @return boolean
	 */
	public function isUeberschrift() {
		return $this->getUeberschrift();
	}

	/**
	 * Returns the leer
	 *
	 * @return boolean $leer
	 */
	public function getLeer() {
		return $this->leer;
	}

	/**
	 * Sets the leer
	 *
	 * @param boolean $leer
	 * @return void
	 */
	public function setLeer($leer) {
		$this->leer = $leer;
	}

	/**
	 * Returns the boolean state of leer
	 *
	 * @return boolean
	 */
	public function isLeer() {
		return $this->getLeer();
	}

	/**
	 * Returns the bild
	 *
	 * @return \string $bild
	 */
	public function getBild() {
		return $this->bild;
	}

	/**
	 * Sets the bild
	 *
	 * @param \string $bild
	 * @return void
	 */
	public function setBild($bild) {
		$this->bild = $bild;
	}

	/**
	 * Returns the titleonly
	 *
	 * @return boolean $titleonly
	 */
	public function getTitleonly() {
		return $this->titleonly;
	}

	/**
	 * Sets the titleonly
	 *
	 * @param boolean $titleonly
	 * @return void
	 */
	public function setTitleonly($titleonly) {
		$this->titleonly = $titleonly;
	}

	/**
	 * Returns the boolean state of titleonly
	 *
	 * @return boolean
	 */
	public function isTitleonly() {
		return $this->getTitleonly();
	}

	/**
	 * Returns the icon
	 *
	 * @return \TYPO3\Custombox\Domain\Model\Icon $icon
	 */
	public function getIcon() {
		return $this->icon;
	}

	/**
	 * Sets the icon
	 *
	 * @param \TYPO3\Custombox\Domain\Model\Icon $icon
	 * @return void
	 */
	public function setIcon(\TYPO3\Custombox\Domain\Model\Icon $icon) {
		$this->icon = $icon;
	}

}
?>