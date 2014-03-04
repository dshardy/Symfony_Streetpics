<?php

namespace Dsh\streetpicsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PhotofileControllerTest extends WebTestCase
{
    public function testPhoto()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Photo');
    }

}
