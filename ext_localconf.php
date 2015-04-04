<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Pitsmailchimp',
	array(
		'Subscribe' => 'list, show, storeAddress, storeAddresssubmit',
		
	),
	// non-cacheable actions
	array(
		'Subscribe' => 'list, show, storeAddress, storeAddresssubmit',
		
	)
);
