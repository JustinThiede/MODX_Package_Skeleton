<?php
// Reporting
error_reporting(E_ALL ^E_NOTICE);
ini_set('display_errors', true);

// Define MODX Constants
define('MODX_BASE_PATH', '/var/www/html/modx/');
define('MODX_CORE_PATH', MODX_BASE_PATH . 'core/');
define('MODX_MANAGER_PATH', MODX_BASE_PATH . 'manager/');
define('MODX_CONNECTORS_PATH', MODX_BASE_PATH . 'connectors/');
define('MODX_ASSETS_PATH', MODX_BASE_PATH . 'assets/');
define('MODX_BASE_URL', '/modx/');
define('MODX_MANAGER_URL', MODX_BASE_URL . 'manager/');
define('MODX_CONNECTORS_URL', MODX_BASE_URL . 'connectors/');
define('MODX_ASSETS_URL', MODX_BASE_URL . 'assets/');

// Include MODX config
require_once MODX_BASE_PATH . '/core/config/config.inc.php';

// Define sources
$root = dirname(dirname(__FILE__)) . '/';

// Constants
global $sources;
$sources = [
  'root'            => $root,
  'build'           => $root . '_build/',
  'source_core'     => $root . 'core/components/' . PKG_PATH . '/',
  'source_assets'   => $root . 'assets/components/' . PKG_PATH . '/',
  'source_manager'  => $root . 'manager/components/' . PKG_PATH . '/',
];
$sources = array_merge($sources, [
  'includes'          => $sources['build'] . 'includes/',
  'builder_includes'  => $sources['build'] . 'includes/builder/',
  'data'              => $sources['build'] . 'data/',
  'properties'        => $sources['build'] . 'data/properties/',
  'options'           => $sources['build'] . 'options/',
  'resolvers'         => $sources['build'] . 'resolvers/',
  'chunks'            => $sources['source_core'] . 'elements/chunks/',
  'snippets'          => $sources['source_core'] . 'elements/snippets/',
  'plugins'           => $sources['source_core'] . 'elements/plugins/',
  'templates'         => $sources['source_core'] . 'elements/templates/',
  'lexicon'           => $sources['source_core'] . 'lexicon/',
  'docs'              => $sources['source_core'] . 'docs/',
  'model'             => $sources['source_core'] . 'model/',
]);
unset($root);

require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
require_once $sources['includes'] . 'functions.php';

$modx= new modX();
$modx->initialize('mgr');
