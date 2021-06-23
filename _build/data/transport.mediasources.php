<?php

$mediaSources = [];
$params = [
	'basePath' => [
		'name' => 'basePath',
		'desc' => 'prop_file.basePath_desc',
		'type' => 'textfield',
		'options' => [],
		'value' => 'core/components/' . PKG_PATH . '/',
		'lexicon' => 'core:source',
	],
	'baseUrl' => [
		'name' => 'baseUrl',
		'desc' => 'prop_file.baseUrl_desc',
		'type' => 'textfield',
		'options' => [],
		'value' => 'core/components/' . PKG_PATH . '/',
		'lexicon' => 'core:source',
	]
];
$mediaSource = $modx->newObject('sources.modMediaSource', [
	'name' => PKG_NAME_LOWER . '_core',
	'class_key' => 'sources.modFileMediaSource',
	'description' => 'core/components/' . PKG_PATH . '/',//PKG_NAME_LOWER.' Core Source',
	'properties' => $params,
]);
$mediaSources[] = $mediaSource;
	
$params = [
	'basePath' => [
		'name' => 'basePath',
		'desc' => 'prop_file.basePath_desc',
		'type' => 'textfield',
		'options' => [],
		'value' => 'assets/components/' . PKG_PATH . '/',
		'lexicon' => 'core:source',
	],
	'baseUrl' => [
		'name' => 'baseUrl',
		'desc' => 'prop_file.baseUrl_desc',
		'type' => 'textfield',
		'options' => [],
		'value' => 'assets/components/' . PKG_PATH . '/',
		'lexicon' => 'core:source',
	]
];
$mediaSource = $modx->newObject('sources.modMediaSource', [
	'name' => PKG_NAME_LOWER . '_assets',
	'class_key' => 'sources.modFileMediaSource',
	'description' => 'assets/components/' . PKG_PATH . '/',//PKG_NAME_LOWER.' Assets Source',
	'properties' => $params,
]);
$mediaSources[] = $mediaSource;
		
$params = [
	'basePath' => [
		'name' => 'basePath',
		'desc' => 'prop_file.basePath_desc',
		'type' => 'textfield',
		'options' => [],
		'value' => 'manager/components/' . PKG_PATH . '/',
		'lexicon' => 'core:source',
	],
	'baseUrl' => [
		'name' => 'baseUrl',
		'desc' => 'prop_file.baseUrl_desc',
		'type' => 'textfield',
		'options' => [],
		'value' => 'manager/components/' . PKG_PATH . '/',
		'lexicon' => 'core:source',
	]
];
	
$mediaSource = $modx->newObject('sources.modMediaSource', [
	'name' => PKG_NAME_LOWER . '_manager',
	'class_key' => 'sources.modFileMediaSource',
	'description' => 'manager/components/' . PKG_PATH . '/',//PKG_NAME_LOWER.' Manager Source',
	'properties' => $params,
]);
	
$mediaSources[] = $mediaSource;
		
return $mediaSources;