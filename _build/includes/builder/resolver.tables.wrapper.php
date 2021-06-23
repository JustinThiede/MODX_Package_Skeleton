<?php

$vehicle->resolve('php', [
    'source' => $sources['resolvers'] . 'resolver.tables.php',
]);

$modx->log(modX::LOG_LEVEL_INFO, 'Packaged in table resolver.'); 
flush();