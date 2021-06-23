<?php

$plugins = [];
$plugin_name = PKG_NAME_LOWER;
$content = getSnippetContent($sources['plugins'] . $plugin_name . '.plugin.php');

// New Plugin  
if (!empty($content)) {
	$plugin = $modx->newObject('modPlugin');
	$plugin->set('id', 1);
	$plugin->set('name', $plugin_name);
	$plugin->set('description', $plugin_name . '_desc');
	$plugin->set('plugincode', $content);
	
	// Add plugin events
	$events = [];
	$events['OnHandleRequest'] = $modx->newObject('modPluginEvent');
	$events['OnHandleRequest']->fromArray([
		'event' => 'OnHandleRequest',
		'priority' => 0,
		'propertyset' => 0,
	], '', true, true);
	
	$plugin->addMany($events, 'PluginEvents');
	
	$modx->log(xPDO::LOG_LEVEL_INFO, 'Packaged in ' . count($events) . ' Plugin Events.'); 
	flush();
	
	$plugins[] = $plugin;
}

return $plugins;