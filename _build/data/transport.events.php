<?php

$events = [];
$event_name = 'On' . PKG_NAME;
$event = $modx->newObject('modEvent', [
  'service'   => 1,
  'groupname' => PKG_NAME,
]); 
$event->set('name', $event_name);
$events[] = $event;

return $events;