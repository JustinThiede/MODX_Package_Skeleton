<?php

$vehicle->resolve('php', [
	'source' => $sources['resolvers'] . 'resolver.register.php',
]);

$modx->log(modX::LOG_LEVEL_INFO, 'Packaged in register resolver.'); 
flush();