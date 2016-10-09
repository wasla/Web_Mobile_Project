<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Created by PhpStorm.
 * User: nida ilyas
 * Date: 07/10/2016
 * Time: 15:18
 */


/**
 * HabitProgress
 *
 * @ORM\Table(name="progress_report")
 * @ORM\Entity
 */
class progress_report
{

    /**
     * @ORM\Column(name="progress_report_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $progress_report_id;


    /**
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;




    /**
     * @ORM\Column(name="progressHabit1", type="integer")
     */
    private $progressHabit1;




    /*
     * @ORM\Column(name="progressHabit2", type="integer")
     */
    private $progressHabit2;





    /**
     * @ORM\Column(name="progressHabit3", type="integer")
     */
    private $progressHabit3;


    /**
     * @ORM\Column(name="weight", type="float")
     */
    private $weight;


    /**
     * @ORM\Column(name="calories", type="float")
     */
    private  $calories;




    function __toString()
    {
        /*
        $datum = Yaml::parse($this-> date, Yaml::PARSE_DATETIME);
        var_dump(get_class($datum));
        */
        return $this -> date. ", ".
        $this -> progressHabit1. ", ".
        $this -> progressHabit2. ", ".
        $this -> progressHabit3. ", ".
        $this -> weight. ", ".
        $this -> calories;
    }




    /**
     * Get progressReportId
     *
     * @return integer
     */
    public function getProgressReportId()
    {
        return $this->progress_report_id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return progress_report
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;     //|date('d-m-Y H:i:s');
    }

    /**
     * Set progressHabit1
     *
     * @param integer $progressHabit1
     *
     * @return progress_report
     */
    public function setProgressHabit1($progressHabit1)
    {
        $this->progressHabit1 = $progressHabit1;

        return $this;
    }

    /**
     * Get progressHabit1
     *
     * @return integer
     */
    public function getProgressHabit1()
    {
        return $this->progressHabit1;
    }

    /**
     * Set progressHabit3
     *
     * @param integer $progressHabit3
     *
     * @return progress_report
     */
    public function setProgressHabit3($progressHabit3)
    {
        $this->progressHabit3 = $progressHabit3;

        return $this;
    }

    /**
     * Get progressHabit3
     *
     * @return integer
     */
    public function getProgressHabit3()
    {
        return $this->progressHabit3;
    }

    /**
     * Set weight
     *
     * @param float $weight
     *
     * @return progress_report
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set calories
     *
     * @param float $calories
     *
     * @return progress_report
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;

        return $this;
    }

    /**
     * Get calories
     *
     * @return float
     */
    public function getCalories()
    {
        return $this->calories;
    }
}
