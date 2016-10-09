<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\JoinColumn;


/**
 * Created by PhpStorm.
 * User: nida ilyas
 * Date: 07/10/2016
 * Time: 15:18
 */

/**
 * Klant
 *
 * @ORM\Table(name="klanten")
 * @ORM\Entity
 */
class Klant
{


    /**
     * @ORM\Column(name="klant_Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $klant_Id;






    /**
     * @ORM\Column(name="naam", type="string")
     */
    private $naam;







    /**
     * @ORM\Column(name="habit_1", type="string")
     */
    private $habit_1;




    /**
     * @ORM\Column(name="habit_2", type="string")
     */
    private $habit_2;


    /**
     * @ORM\Column(name="habit_3", type="string")
     */
    private $habit_3;


    /**
     * @ManyToMany(targetEntity="progress_report")
     *  * @JoinTable(name="klant_progress_report",
     *      joinColumns={@JoinColumn(name="klant_Id", referencedColumnName="klant_Id")},
     *      inverseJoinColumns={@JoinColumn(name="progress_report_id", referencedColumnName="progress_report_id", unique=true)}
     *      )
     */
private $progressReports;


    function __toString()
    {
        return $this -> naam. ", ".
        $this -> habit_1. ", ".
        $this -> habit_2. ", ".
        $this -> habit_3;
    }



    function jsonSerialize(){
        return array(
            'naam' => $this-> naam
        );
    }





    /**
     * Get klantId
     *
     * @return integer
     */
    public function getKlantId()
    {
        return $this->klant_Id;
    }

    /**
     * Set naam
     *
     * @param string $naam
     *
     * @return Klant
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set habit1
     *
     * @param string $habit1
     *
     * @return Klant
     */
    public function setHabit1($habit1)
    {
        $this->habit_1 = $habit1;

        return $this;
    }

    /**
     * Get habit1
     *
     * @return string
     */
    public function getHabit1()
    {
        return $this->habit_1;
    }

    /**
     * Set habit2
     *
     * @param string $habit2
     *
     * @return Klant
     */
    public function setHabit2($habit2)
    {
        $this->habit_2 = $habit2;

        return $this;
    }

    /**
     * Get habit2
     *
     * @return string
     */
    public function getHabit2()
    {
        return $this->habit_2;
    }

    /**
     * Set habit3
     *
     * @param string $habit3
     *
     * @return Klant
     */
    public function setHabit3($habit3)
    {
        $this->habit_3 = $habit3;

        return $this;
    }

    /**
     * Get habit3
     *
     * @return string
     */
    public function getHabit3()
    {
        return $this->habit_3;
    }
}
