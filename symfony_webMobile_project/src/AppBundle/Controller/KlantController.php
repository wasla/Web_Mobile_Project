<?php

namespace AppBundle\Controller;

use AppBundle\Entity\klant_progress_report;
use Doctrine\ORM\Query\AST\WhereClause;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Klant;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/klant")
 */
class KlantController extends Controller
{
    /**
     * @Route("/all")
     */
    public function allAction()
    {
        $klanten = $this->getDoctrine()
            ->getRepository('AppBundle:Klant')
            ->findAll();
        /*
        return $this->render('AppBundle:Klant:all.html.twig', array(
            "klanten"=> $klanten
        ));
        */

        return new Response($this-> toJson($klanten));
    }

    /**
     * @Route("/{id}")
     */
    public function findByIdAction($id)
    {

        $klantDetails = $this->getDoctrine()
            ->getRepository('AppBundle:Klant')
            ->find($id);
        return new Response($this-> toJson($klantDetails));
    }
    /**
     * @Route("/report/{reportId}")
     */
    public function progressAction($reportId){

        $progress_report = $this->getDoctrine()
            ->getRepository('AppBundle:progress_report')
            ->find($reportId);

        return new Response($this-> toJson($progress_report));
    }

    /**
     * @Route("/detailreport/{klantId}")
     */
    public function detailreport($klantId){
        $report = $this-> getDoctrine()
            ->getRepository('AppBundle:Klant')-> findOneBy(array('klant_Id' => $klantId));

        return new Response($this-> toJson($report));




    }




    /**
     * @return array
     */
    public function toJson($array){
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $jsonContent = $serializer->serialize(array($array), 'json');

        return $jsonContent;
    }

}