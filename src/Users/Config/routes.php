<?php

$app->get('/users/list', 'users.controller:listAction')->bind('users.list');
$app->get('/users/edit/{id}', 'users.controller::editAction')->bind('users.edit');
$app->get('/users/new', 'users.controller::newAction')->bind('users.new');
$app->post('/users/delete/{id}', 'users.controller::deleteAction')->bind('users.delete');
$app->post('/users/save', 'users.controller::saveAction')->bind('users.save');
