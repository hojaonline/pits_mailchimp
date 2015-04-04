<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_pitsmailchimp_domain_model_mailsetting'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_pitsmailchimp_domain_model_mailsetting']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, listname, apikey, listid, userpid, syncdetails, chimpusers',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, listname, apikey, listid, userpid, syncdetails, chimpusers, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_pitsmailchimp_domain_model_mailsetting',
				'foreign_table_where' => 'AND tx_pitsmailchimp_domain_model_mailsetting.pid=###CURRENT_PID### AND tx_pitsmailchimp_domain_model_mailsetting.sys_language_uid IN (-1,0)',
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

		'listname' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:pits_mailchimp/Resources/Private/Language/locallang_db.xlf:tx_pitsmailchimp_domain_model_mailsetting.listname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'apikey' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:pits_mailchimp/Resources/Private/Language/locallang_db.xlf:tx_pitsmailchimp_domain_model_mailsetting.apikey',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'listid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:pits_mailchimp/Resources/Private/Language/locallang_db.xlf:tx_pitsmailchimp_domain_model_mailsetting.listid',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'userpid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:pits_mailchimp/Resources/Private/Language/locallang_db.xlf:tx_pitsmailchimp_domain_model_mailsetting.userpid',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'syncdetails' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:pits_mailchimp/Resources/Private/Language/locallang_db.xlf:tx_pitsmailchimp_domain_model_mailsetting.syncdetails',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'chimpusers' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:pits_mailchimp/Resources/Private/Language/locallang_db.xlf:tx_pitsmailchimp_domain_model_mailsetting.chimpusers',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_pitsmailchimp_domain_model_chimpusers',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		
	),
);
