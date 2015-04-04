<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Pitsmailchimp',
	'Pits Mailchimp Extension'
);

if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.' . $_EXTKEY,
		'tools',	 // Make module a submodule of 'tools'
		'pitslistimporter',	// Submodule key
		'',						// Position
		array(
			'Subscribe' => 'list, show','Mailsetting' => 'list, show, new, create, edit, update, delete','Chimpusers' => 'list, show, new, create, edit, update, delete','Settings' => 'list, show, new, create, edit, update, delete',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_pitslistimporter.xlf',
		)
	);

}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'PITS Mailchimp Subscriber');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pitsmailchimp_domain_model_subscribe', 'EXT:pits_mailchimp/Resources/Private/Language/locallang_csh_tx_pitsmailchimp_domain_model_subscribe.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pitsmailchimp_domain_model_subscribe');
$GLOBALS['TCA']['tx_pitsmailchimp_domain_model_subscribe'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:pits_mailchimp/Resources/Private/Language/locallang_db.xlf:tx_pitsmailchimp_domain_model_subscribe',
		'label' => 'uid',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => '',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Subscribe.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_pitsmailchimp_domain_model_subscribe.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pitsmailchimp_domain_model_mailsetting', 'EXT:pits_mailchimp/Resources/Private/Language/locallang_csh_tx_pitsmailchimp_domain_model_mailsetting.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pitsmailchimp_domain_model_mailsetting');
$GLOBALS['TCA']['tx_pitsmailchimp_domain_model_mailsetting'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:pits_mailchimp/Resources/Private/Language/locallang_db.xlf:tx_pitsmailchimp_domain_model_mailsetting',
		'label' => 'listname',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'listname,apikey,listid,userpid,syncdetails,chimpusers,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Mailsetting.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_pitsmailchimp_domain_model_mailsetting.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pitsmailchimp_domain_model_chimpusers', 'EXT:pits_mailchimp/Resources/Private/Language/locallang_csh_tx_pitsmailchimp_domain_model_chimpusers.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pitsmailchimp_domain_model_chimpusers');
$GLOBALS['TCA']['tx_pitsmailchimp_domain_model_chimpusers'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:pits_mailchimp/Resources/Private/Language/locallang_db.xlf:tx_pitsmailchimp_domain_model_chimpusers',
		'label' => 'firstname',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'firstname,lastname,email,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Chimpusers.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_pitsmailchimp_domain_model_chimpusers.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pitsmailchimp_domain_model_settings', 'EXT:pits_mailchimp/Resources/Private/Language/locallang_csh_tx_pitsmailchimp_domain_model_settings.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pitsmailchimp_domain_model_settings');
$GLOBALS['TCA']['tx_pitsmailchimp_domain_model_settings'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:pits_mailchimp/Resources/Private/Language/locallang_db.xlf:tx_pitsmailchimp_domain_model_settings',
		'label' => 'property',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'property,value,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Settings.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_pitsmailchimp_domain_model_settings.gif'
	),
);
