<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Employee
 *
 * @ORM\Table(name="employee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmployeeRepository")
 */
class Employee
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
     * @ORM\Column(name="sur_name", type="string", length=255)
     */
    private $surName;

    /**
     * @var \string
     *
     * @ORM\Column(name="pob", type="string", length=255)
     */
    private $pob;

    /**
     * @var \string
     * @Assert\Date()
     * @ORM\Column(name="dob", type="string", length=50)
     */
    private $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="citizenship", type="string", length=255)
     */
    private $citizenship;

    /**
     * @var string
     *
     * @ORM\Column(name="passport", type="string", length=255, nullable=true)
     */
    private $passport;

    /**
     * @var string
     *
     * @ORM\Column(name="identity_card", type="string", length=25, nullable=true)
     */
    private $identityCard;


    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     *@ORM\OneToMany(targetEntity="Document", mappedBy="employees")
     */
    private $document;

    /**
     *@ORM\OneToMany(targetEntity="InternalDoc", mappedBy="employee")
     */
    private $internalDocs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="visa_from", type="date", nullable=true)
     */
    private $visaFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="visa_to", type="date", nullable=true)
     */
    private $visaTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="permit_from", type="date", nullable=true)
     */
    private $permitFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="permit_to", type="date", nullable=true)
     */
    private $permitTo;
    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;
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
     * @ORM\Column(name="mother_name", type="string", length=255, nullable=true)
     */
    private $motherName;
    /**
     * @var string
     *
     * @ORM\Column(name="father_name", type="string", length=255, nullable=true)
     */
    private $fatherName;
    /**
     * @var string
     *
     * @ORM\Column(name="pesel", type="string", nullable=true)
     */
    private $pesel;






    /**
     * Constructor
     */
    public function __construct()
    {
        $this->document = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Employee
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
     * Set surName
     *
     * @param string $surName
     * @return Employee
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;

        return $this;
    }

    /**
     * Get surName
     *
     * @return string 
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * Set pob
     *
     * @param string $pob
     * @return Employee
     */
    public function setPob($pob)
    {
        $this->pob = $pob;

        return $this;
    }

    /**
     * Get pob
     *
     * @return string 
     */
    public function getPob()
    {
        return $this->pob;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     * @return Employee
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set citizenship
     *
     * @param string $citizenship
     * @return Employee
     */
    public function setCitizenship($citizenship)
    {
        $this->citizenship = $citizenship;

        return $this;
    }

    /**
     * Get citizenship
     *
     * @return string 
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }

    /**
     * Set passport
     *
     * @param string $passport
     * @return Employee
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;

        return $this;
    }

    /**
     * Get passport
     *
     * @return string 
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Employee
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set visaFrom
     *
     * @param \DateTime $visaFrom
     * @return Employee
     */
    public function setVisaFrom($visaFrom)
    {
        $this->visaFrom = $visaFrom;

        return $this;
    }

    /**
     * Get visaFrom
     *
     * @return \DateTime 
     */
    public function getVisaFrom()
    {
        return $this->visaFrom;
    }

    /**
     * Set visaTo
     *
     * @param \DateTime $visaTo
     * @return Employee
     */
    public function setVisaTo($visaTo)
    {
        $this->visaTo = $visaTo;

        return $this;
    }

    /**
     * Get visaTo
     *
     * @return \DateTime 
     */
    public function getVisaTo()
    {
        return $this->visaTo;
    }

    /**
     * Set permitFrom
     *
     * @param \DateTime $permitFrom
     * @return Employee
     */
    public function setPermitFrom($permitFrom)
    {
        $this->permitFrom = $permitFrom;

        return $this;
    }

    /**
     * Get permitFrom
     *
     * @return \DateTime 
     */
    public function getPermitFrom()
    {
        return $this->permitFrom;
    }

    /**
     * Set permitTo
     *
     * @param \DateTime $permitTo
     * @return Employee
     */
    public function setPermitTo($permitTo)
    {
        $this->permitTo = $permitTo;

        return $this;
    }

    /**
     * Get permitTo
     *
     * @return \DateTime 
     */
    public function getPermitTo()
    {
        return $this->permitTo;
    }

    /**
     * Add document
     *
     * @param \AppBundle\Entity\Document $document
     * @return Employee
     */
    public function addDocument(\AppBundle\Entity\Document $document)
    {
        $this->document[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \AppBundle\Entity\Document $document
     */
    public function removeDocument(\AppBundle\Entity\Document $document)
    {
        $this->document->removeElement($document);
    }

    /**
     * Get document
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Add internalDocs
     *
     * @param \AppBundle\Entity\InternalDoc $internalDocs
     * @return Employee
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
        return $this->getName()." ".$this->getSurName();
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Employee
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Employee
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
     * @return Employee
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
     * Set motherName
     *
     * @param string $motherName
     *
     * @return Employee
     */
    public function setMotherName($motherName)
    {
        $this->motherName = $motherName;

        return $this;
    }

    /**
     * Get motherName
     *
     * @return string
     */
    public function getMotherName()
    {
        return $this->motherName;
    }

    /**
     * Set fatherName
     *
     * @param string $fatherName
     *
     * @return Employee
     */
    public function setFatherName($fatherName)
    {
        $this->fatherName = $fatherName;

        return $this;
    }

    /**
     * Get fatherName
     *
     * @return string
     */
    public function getFatherName()
    {
        return $this->fatherName;
    }

    /**
     * Set pesel
     *
     * @param integer $pesel
     *
     * @return Employee
     */
    public function setPesel($pesel)
    {
        $this->pesel = $pesel;

        return $this;
    }

    /**
     * Get pesel
     *
     * @return integer
     */
    public function getPesel()
    {
        return $this->pesel;
    }

    /**
     * Set identityCard
     *
     * @param string $identityCard
     *
     * @return Employee
     */
    public function setIdentityCard($identityCard)
    {
        $this->identityCard = $identityCard;

        return $this;
    }

    /**
     * Get identityCard
     *
     * @return string
     */
    public function getIdentityCard()
    {
        return $this->identityCard;
    }
}