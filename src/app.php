<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;

$app = new Application();

$app->register(new ServiceControllerServiceProvider());
$app->register(new DoctrineServiceProvider());
$app->register(new TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

require 'Users/Config/dev.php';
require 'Users/Config/dependency_injections.php';
require 'Users/Config/routes.php';
