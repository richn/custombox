<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Custombox',
	array(
		'CustomBox' => 'list, show, ',
		'BoxInhalt' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'CustomBox' => '',
		'BoxInhalt' => '',
		
	)
);

?>