<?php
/**
 * Created by PhpStorm.
 * User: Wasla
 * Date: 10/13/2016
 * Time: 11:42 PM
 */

namespace tests\AppBundle\Utils;


use AppBundle\Entity\progress_report;
use AppBundle\Entity\Klant;
use AppBundle\Entity\klant_progress_report;
use Doctrine\ORM\Query\AST\WhereClause;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class progress_reportTest extends \PHPUnit_Framework_TestCase
{
    protected $klant ;
    protected  $habit_progress;

    public function setUp()
    {

        // parent::setUpBeforeClass();
        $this->klant = new Klant();
        $this->habit_progress= new progress_report();
        $this->klant->setNaam('klant2');
        $this->klant->setHabit1('Geen frietjes eten');
        $this->habit_progress->setCalories(250);
        $this->habit_progress->setWeight(57);
        $this->habit_progress->setProgressHabit1(1);

        //  $em = $this->getDoctrine()->getManager();
        // $em->persist($this->klant);
        // $em->flush();
    }
    public function testKlant()
    {
        $this->assertEquals($this->klant->getNaam(), "klant2" );
        $this->assertEquals($this->klant->getHabit1(), "Geen frietjes eten" );

    }
    public function testProgressHabit()
    {
        $this->assertEquals($this->habit_progress->getProgressHabit1(), 1);
    }
}