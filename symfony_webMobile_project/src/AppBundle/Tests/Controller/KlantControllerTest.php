<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class KlantControllerTest extends WebTestCase
{
    /*
    public function testAll()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/klant/all');
    }
*/
    public function testFindbyid()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/klant/{id}');
        $this->assertGreaterThan(0, $crawler-> filter
        ('[{"klantId":1,"naam":"Nida","habit1":"Geen frietjes eten","habit2":"veel water drinken","habit3":"5 km wandelen"}]')-> count());
    }

}