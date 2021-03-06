<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompanyRepository")
 */
class Company
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
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="post_code", type="string", length=255)
     */
    private $postCode;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_person", type="string", length=255)
     */
    private $contactPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=100)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="nip", type="string", length=50)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="regon", type="string", length=50)
     */
    private $regon;

    /**
     * @ORM\OneToMany(targetEntity="InternalDoc", mappedBy="company")
     */
    private $internalDocs;
    /**
     * @ORM\OneToMany(targetEntity="WorkLoad", mappedBy="company")
     */
    private $workLoads;




    
    /**
     * Constructor
     */
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
     * @return Company
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
     * Set city
     *
     * @param string $city
     * @return Company
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postCode
     *
     * @param string $postCode
     * @return Company
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get postCode
     *
     * @return string 
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Company
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set contactPerson
     *
     * @param string $contactPerson
     * @return Company
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;

        return $this;
    }

    /**
     * Get contactPerson
     *
     * @return string 
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Company
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set nip
     *
     * @param string $nip
     * @return Company
     */
    public function setNip($nip)
    {
        $this->nip = $nip;

        return $this;
    }

    /**
     * Get nip
     *
     * @return string 
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Set regon
     *
     * @param string $regon
     * @return Company
     */
    public function setRegon($regon)
    {
        $this->regon = $regon;

        return $this;
    }

    /**
     * Get regon
     *
     * @return string 
     */
    public function getRegon()
    {
        return $this->regon;
    }

    /**
     * Add internalDocs
     *
     * @param \AppBundle\Entity\InternalDoc $internalDocs
     * @return Company
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
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Add workLoad
     *
     * @param \AppBundle\Entity\WorkLoad $workLoad
     *
     * @return Company
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
