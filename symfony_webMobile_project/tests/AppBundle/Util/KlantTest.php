<?php

/**
 * Created by PhpStorm.
 * User: Wasla
 * Date: 10/10/2016
 * Time: 10:50 PM
 */
namespace tests\AppBundle\Utils;
use AppBundle\Entity\Klant;
use AppBundle\Entity\klant_progress_report;
use Doctrine\ORM\Query\AST\WhereClause;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class KlantTest extends \PHPUnit_Framework_TestCase
{
/*
    public function testFailure()
    {
      $this-
>assertEquals(2, 2);
    }
*/
    protected $klant ;
    public function setUp()
    {

       // parent::setUpBeforeClass();
        $this->klant = new Klant(); 
        $this->klant->setNaam('klant2');
        $this->klant->setHabit1('Geen frietjes eten');
      //  $em = $this->getDoctrine()->getManager();
       // $em->persist($this->klant);
      // $em->flush();
    }
    public function testKlant()
    {
        $this->assertEquals($this->klant->getNaam(), "klant2" );
        $this->assertEquals($this->klant->getHabit1(), "Geen frietjes eten" );

    }

}