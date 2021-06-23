<?php

$settings = [];
$setting_name = PKG_NAME_LOWER . '.setting';
$setting = $modx->newObject('modSystemSetting');
$setting->fromArray([
 'key' => $setting_name,
 'value' => '',
 'xtype' => 'textfield',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
], '', true, true);
$settings[] = $setting;

return $settings;