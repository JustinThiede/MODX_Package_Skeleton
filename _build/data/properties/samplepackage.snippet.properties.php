<?php

$snippetName = 'samplepackage';
$pkgName = 'samplepackage';
$properties = [
	[
		'name' => $snippetName . '_prop',
		'desc' => 'prop_' . $pkgName . '.' . $snippetName . '_prop_desc',
		'type' => 'textfield',
		'options' => '',
		'value' => $snippetName . '_value',
		'lexicon' => $pkgName . ':properties',
	],
	[
		'name' => $snippetName . '_list',
		'desc' => 'prop_' . $pkgName . '.' . $snippetName . '_list_desc',
		'type' => 'list',
		'options' => [
			[
				'text' => 'prop_' . $pkgName . '.' . $snippetName . '_asc', 
				'value' => 'ASC'
			],
			[
				'text' => 'prop_' . $pkgName . '.' . $snippetName . '_desc', 
				'value' => 'DESC'
			],
		],
		'value' => 'DESC',
		'lexicon' => $pkgName . ':properties',
	],
];

return $properties;