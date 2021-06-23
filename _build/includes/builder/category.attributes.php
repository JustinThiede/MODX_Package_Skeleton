<?php
$attr = [
	xPDOTransport::UNIQUE_KEY => 'category',
	xPDOTransport::PRESERVE_KEYS => false,
	xPDOTransport::UPDATE_OBJECT => true,
	xPDOTransport::RELATED_OBJECTS => true,
	xPDOTransport::RELATED_OBJECT_ATTRIBUTES => [
		'Snippets' => [
			xPDOTransport::PRESERVE_KEYS => false,
			xPDOTransport::UPDATE_OBJECT => true,
			xPDOTransport::UNIQUE_KEY => 'name',
		],
		'Chunks' => [
			xPDOTransport::PRESERVE_KEYS => false,
			xPDOTransport::UPDATE_OBJECT => true,
			xPDOTransport::UNIQUE_KEY => 'name',
		],
		'Plugins' => [
			xPDOTransport::PRESERVE_KEYS => false,
			xPDOTransport::UPDATE_OBJECT => true,
			xPDOTransport::UNIQUE_KEY => 'name',
			xPDOTransport::RELATED_OBJECTS => true,
			xPDOTransport::RELATED_OBJECT_ATTRIBUTES => [
				'PluginEvents' => [
					xPDOTransport::PRESERVE_KEYS => true,
					xPDOTransport::UPDATE_OBJECT => false,
					xPDOTransport::UNIQUE_KEY => [
						'pluginid',
						'event'
					],
				],
			],
		],
	]
];