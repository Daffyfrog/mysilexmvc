<?php
// web/index.php
$loader = require_once __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../src/app.php';
$app->run();
