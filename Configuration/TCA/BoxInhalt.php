<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_custombox_domain_model_boxinhalt'] = array(
	'ctrl' => $TCA['tx_custombox_domain_model_boxinhalt']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, text, link, special, ueberschrift, leer, bild, titleonly, icon',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, text, link, special, ueberschrift, leer, bild, titleonly, icon,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_custombox_domain_model_boxinhalt',
				'foreign_table_where' => 'AND tx_custombox_domain_model_boxinhalt.pid=###CURRENT_PID### AND tx_custombox_domain_model_boxinhalt.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:custombox/Resources/Private/Language/locallang_db.xlf:tx_custombox_domain_model_boxinhalt.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'text' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:custombox/Resources/Private/Language/locallang_db.xlf:tx_custombox_domain_model_boxinhalt.text',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts]',
		),
		'link' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:custombox/Resources/Private/Language/locallang_db.xlf:tx_custombox_domain_model_boxinhalt.link',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'special' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:custombox/Resources/Private/Language/locallang_db.xlf:tx_custombox_domain_model_boxinhalt.special',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'ueberschrift' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:custombox/Resources/Private/Language/locallang_db.xlf:tx_custombox_domain_model_boxinhalt.ueberschrift',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'leer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:custombox/Resources/Private/Language/locallang_db.xlf:tx_custombox_domain_model_boxinhalt.leer',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'bild' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:custombox/Resources/Private/Language/locallang_db.xlf:tx_custombox_domain_model_boxinhalt.bild',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_custombox',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'titleonly' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:custombox/Resources/Private/Language/locallang_db.xlf:tx_custombox_domain_model_boxinhalt.titleonly',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'icon' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:custombox/Resources/Private/Language/locallang_db.xlf:tx_custombox_domain_model_boxinhalt.icon',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_custombox_domain_model_icon',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'custombox' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);

?>