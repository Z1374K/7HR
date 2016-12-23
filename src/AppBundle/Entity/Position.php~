<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Position
 *
 * @ORM\Table(name="position")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PositionRepository")
 */
class Position
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="integer")
     */
    private $rate;
    /**
     * @ORM\OneToMany(targetEntity="WorkLoad", mappedBy="position")
     */
    private $workLoads;


    /**
     * @ORM\OneToMany(targetEntity="InternalDoc", mappedBy="position")
     */
    private $internalDocs;

    public function __construct()
    {
        $this->internalDocs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Position
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     * @return Position
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

    /**
     * Add internalDocs
     *
     * @param \AppBundle\Entity\InternalDoc $internalDocs
     * @return Position
     */
    public function addInternalDoc(\AppBundle\Entity\InternalDoc $internalDocs)
    {
        $this->internalDocs[] = $internalDocs;

        return $this;
    }

    /**
     * Remove internalDocs
     *
     * @param \AppBundle\Entity\InternalDoc $internalDocs
     */
    public function removeInternalDoc(\AppBundle\Entity\InternalDoc $internalDocs)
    {
        $this->internalDocs->removeElement($internalDocs);
    }

    /**
     * Get internalDocs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInternalDocs()
    {
        return $this->internalDocs;
    }

    public function __toString(){
        return $this->getName();
    }

    /**
     * Add workLoad
     *
     * @param \AppBundle\Entity\WorkLoad $workLoad
     *
     * @return Position
     */
    public function addWorkLoad(\AppBundle\Entity\WorkLoad $workLoad)
    {
        $this->workLoads[] = $workLoad;

        return $this;
    }

    /**
     * Remove workLoad
     *
     * @param \AppBundle\Entity\WorkLoad $workLoad
     */
    public function removeWorkLoad(\AppBundle\Entity\WorkLoad $workLoad)
    {
        $this->workLoads->removeElement($workLoad);
    }

    /**
     * Get workLoads
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWorkLoads()
    {
        return $this->workLoads;
    }
}
