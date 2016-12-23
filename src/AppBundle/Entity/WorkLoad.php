<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkLoad
 *
 * @ORM\Table(name="work_load")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WorkLoadRepository")
 */
class WorkLoad
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="hours_in_mnth", type="integer")
     */
    private $hoursInMnth;

    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="integer")
     */
    private $rate;


    private $employee;


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
     * Set hoursInMnth
     *
     * @param integer $hoursInMnth
     * @return WorkLoad
     */
    public function setHoursInMnth($hoursInMnth)
    {
        $this->hoursInMnth = $hoursInMnth;

        return $this;
    }

    /**
     * Get hoursInMnth
     *
     * @return integer 
     */
    public function getHoursInMnth()
    {
        return $this->hoursInMnth;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     * @return WorkLoad
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
    }
}
