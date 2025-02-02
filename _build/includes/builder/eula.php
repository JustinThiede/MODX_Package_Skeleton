<?php
$modx->log(modX::LOG_LEVEL_INFO, 'Adding package attributes and setup options...'); 
flush();

$builder->setPackageAttributes([
	'license' => file_get_contents($sources['docs'] . 'license.txt'),
	'readme' => file_get_contents($sources['docs'] . 'readme.txt'),
	'changelog' => file_get_contents($sources['docs'] . 'changelog.txt'), 
	# 'setup-options' => [
	#   'source' => $sources['options'].'options.setup.php',
	# ],
]);