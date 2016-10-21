<?php

$app['users.repository'] = function () use ($app) {
  return new \App\Users\Repository\UserRepository($app['db']);
};

$app['users.service'] = function () use ($app) {
  return new \App\Users\Service\UserService($app['users.repository']);
};

$app['users.controller'] = function () use ($app) {
  return new \App\Users\Controller\IndexController($app['users.service']);
};
