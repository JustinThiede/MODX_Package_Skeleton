<?php

$menus = [];

$action= $modx->newObject('modAction');
$action->fromArray([
  'id' => 1,
  'namespace' => NAMESPACE_NAME,
  'parent' => 0,
  'controller' => 'controllers/mgr/index',
  'haslayout' => true,
  'lang_topics' => NAMESPACE_NAME . ':default',
  'assets' => '',
], '', true, true);

$menu = $modx->newObject('modMenu');
$menu->fromArray([
  'text' => NAMESPACE_NAME,
  'parent' => 'components',
  'description' => NAMESPACE_NAME . '.module_desc',
  'icon' => 'images/icons/plugin.gif',
  'menuindex' => 0,
  'params' => '',
  'handler' => '',
  'permissions'   => '',
  'namespace' => NAMESPACE_NAME,
], '', true, true);

$menu->addOne($action);
$menus[] = $menu;

return $menus;
