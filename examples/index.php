<?php

// namespace Test;

require_once __DIR__ . '/vendor/autoload.php';


$slack = new FullyBaked\Pslackr\Pslackr('https://hooks.slack.com/services/12341234/B0C60C89Y/F9p3CjZXIXUwg0UfY6TDiWG0');
$message = new FullyBaked\Pslackr\Messages\CustomMessage('text');

$slack->send($message);
