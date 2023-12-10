<?php

namespace tests\Application;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

class TesteControllerTest extends WebTestCase
{
    public function testGetOdds(): void
    {
        self::createClient()->request(Request::METHOD_GET, '/odds');

        $this->assertResponseIsSuccessful();
    }
}
