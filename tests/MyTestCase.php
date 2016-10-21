<?php
/**
 * Created by PhpStorm.
 * User: colshine
 * Date: 17/12/2013
 * Time: 12:16 PM.
 */

namespace App\Tests;

use Silex\WebTestCase;

class MyTestCase extends WebTestCase
{
    public function createApplication()
    {
        $app = require __DIR__.'/../src/app.php';X

        return $app;
    }
    public function setUp()
    {
        parent::setUp();
    }

}
