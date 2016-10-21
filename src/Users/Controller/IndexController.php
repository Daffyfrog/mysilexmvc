<?php

namespace App\Users\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Users\Service\UserService;

class IndexController
{
    protected $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }
    public function listAction(Request $request, Application $app)
    {
        $users = $this->service->getAll();

        return $app['twig']->render('users.list.html.twig', array('users' => $users));
    }

    public function deleteAction(Request $request, Application $app)
    {
        $parameters = $request->attributes->all();
        $this->service->delete($parameters['id']);

        return $app->redirect($app['url_generator']->generate('users.list'));
    }

    public function editAction(Request $request, Application $app)
    {
        $parameters = $request->attributes->all();
        $user = $this->service->getById($parameters['id']);

        return $app['twig']->render('users.form.html.twig', array('user' => $user));
    }

    public function saveAction(Request $request, Application $app)
    {
        $parameters = $request->request->all();
        $user = $this->service->save($parameters);

        return $app->redirect($app['url_generator']->generate('users.list'));
    }

    public function newAction(Request $request, Application $app)
    {
        return $app['twig']->render('users.form.html.twig');
    }
}
