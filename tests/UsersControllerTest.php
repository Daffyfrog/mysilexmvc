<?php

namespace App\Tests;

class UsersControllerTest extends MyTestCase
{
    private $repoUserMock;

    protected setUp() {

        parent::setUp();
        $repoUserMock = $this->getMockBuilder('Services\ExampleService');
    }
    // public function testInitialPage()
    // {
    //     $client = $this->createClient();
    //     $crawler = $client->request('GET', '/users/list');
    //
    //     $this->assertTrue($client->getResponse()->isOk());
    //     $this->assertCount(1, $crawler->filter('h1:contains("utilisateurs")'));
    // }

    public function testListAction()
    {
        $users = $this->app['repository.user']->getAll();
        $this->assertEquals($controller->listAction(null, $this->app), $users);
    }
}
