<?php
/**
 * Created by PhpStorm.
 * User: Wasla
 * Date: 10/11/2016
 * Time: 1:35 PM
 */

namespace Tests\AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\Query\AST\WhereClause;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Response;

class KlantControllerTest extends WebTestCase
{

    public function testFindByIdAction()
    {
        //Client instance
        $client  = static ::createClient();
        $crawler = $client->request('GET', sprintf('/klant/%d',1));
        //Getting the response of the requested URL
        //Assert that Page is loaded ok
        $this->assertEquals(200, $client->getResponse()->getStatusCode());


        // $response = json_decode($client->getResponse()->getContent());
        // $this->assertEquals(200, json_decode($client->getResponse()->getContent()));

        /*
         $id= 1;
         $klantDetails = $this->getDoctrine()
             ->getRepository('AppBundle:Klant')
             ->find($id);

         $this->assertEquals(array(),$klantDetails );
        */
    }

    public function testProgressAction(){
        $client  = static ::createClient();
        $crawler = $client->request('GET',sprintf('/klant/report/%d',2) );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        /*
        $reportId = 1;
        $progress_report = $this->getDoctrine()
            ->getRepository('AppBundle:progress_report')
            ->find($reportId);

        $this->assertEquals(array(),$progress_report);
        */
    }


    public function testDetailreport(){
        $client  = static ::createClient();
        $crawler = $client->request('GET',sprintf('/klant/detailreport/%d',1) );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        /*
        $klantId=2;
        $report = $this-> getDoctrine()
            ->getRepository('AppBundle:Klant')-> findOneBy(array('klant_Id' => $klantId));

        $this->assertEquals(array(),($report));
        */




    }


    public function testAllAction()
      {
          $client  = static ::createClient();
          $klanten = $this->getRepository()->findAll();
        /*  $client->request(
              'GET',
              '/all',
              array(),
              array('CONTENT_TYPE' => 'application/json',)

          );*/

       //  $crawler = $client->request('GET',sprintf('/all',array(1,2)) ); // '/all'
         $this->assertEquals(200, $client->getResponse()->getStatusCode());
          $this->assertCount(1, $klanten, '');
        //  $response = json_decode($client->getResponse()->getContent());


        //  $this->assertEquals(200, json_decode($client->getResponse()->getContent()));

          /*
                    $klanten = $this->getDoctrine()
                        ->getRepository('AppBundle:Klant')
                        ->findAll();
          */

         // $this->assertEquals(array(),$klanten );//$klanten

        //  $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());



      }







}