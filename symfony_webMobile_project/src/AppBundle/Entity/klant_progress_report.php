<?php
/**
 * Created by PhpStorm.
 * User: nida ilyas
 * Date: 09/10/2016
 * Time: 01:24
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * HabitProgress
 *
 * @ORM\Table(name="klant_progress_report")
 * @ORM\Entity
 */

class klant_progress_report
{

    /**
     * @ORM\Column(name="klant_progress_report_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $klant_progress_report_id;



    /**
     * @var \klant_Id
     * @ORM\OneTOMany(targetEntity="Klant" )
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="klant_Id", referencedColumnName="klant_Id")
     * })
     */
    private $klant_Id;


    /**
     * @var \progress_report_Id
     * @ORM\ManyToOne(targetEntity="progress_report")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="progress_report_Id", referencedColumnName="progress_report_id")
     * })
     */
    private $progress_report_Id;

}