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
 * Habit
 *
 * @ORM\Table(name="habits")
 * @ORM\Entity
 */
class Habit
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="description", type="string")
     */
    private $description;




    function __toString()
    {
        return $this -> description.$this->id;

    }




    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Habit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
