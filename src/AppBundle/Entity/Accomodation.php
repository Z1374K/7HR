<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accomodation
 *
 * @ORM\Table(name="accomodation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccomodationRepository")
 */
class Accomodation
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
     * @ORM\Column(name="owner", type="string", length=255)
     */
    private $owner;

    /**
     * @var int
     *
     * @ORM\Column(name="var_cost", type="integer")
     */
    private $varCost;

    /**
     * @var int
     *
     * @ORM\Column(name="constant_cost", type="integer")
     */
    private $constantCost;

    /**
     * @var int
     *
     * @ORM\Column(name="room_number", type="integer")
     */
    private $roomNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="bed_number", type="integer")
     */
    private $bedNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="account", type="string")
     */
    private $account;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="bigint")
     */
    private $telephone;

    /**
     * @var int
     *
     * @ORM\Column(name="employee_cost", type="integer")
     */
    private $employeeCost;

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=255)
     */
    private $town;


    /**
     * @var int
     */
    private $availableBeds;

    /**
     * @ORM\OneToMany(targetEntity="Employee", mappedBy="accomodation")
     */
    private $employees;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->employees = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set owner
     *
     * @param string $owner
     *
     * @return Accomodation
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set varCost
     *
     * @param integer $varCost
     *
     * @return Accomodation
     */
    public function setVarCost($varCost)
    {
        $this->varCost = $varCost;

        return $this;
    }

    /**
     * Get varCost
     *
     * @return integer
     */
    public function getVarCost()
    {
        return $this->varCost;
    }

    /**
     * Set constantCost
     *
     * @param integer $constantCost
     *
     * @return Accomodation
     */
    public function setConstantCost($constantCost)
    {
        $this->constantCost = $constantCost;

        return $this;
    }

    /**
     * Get constantCost
     *
     * @return integer
     */
    public function getConstantCost()
    {
        return $this->constantCost;
    }

    /**
     * Set roomNumber
     *
     * @param integer $roomNumber
     *
     * @return Accomodation
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * Get roomNumber
     *
     * @return integer
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * Set bedNumber
     *
     * @param integer $bedNumber
     *
     * @return Accomodation
     */
    public function setBedNumber($bedNumber)
    {
        $this->bedNumber = $bedNumber;

        return $this;
    }

    /**
     * Get bedNumber
     *
     * @return integer
     */
    public function getBedNumber()
    {
        return $this->bedNumber;
    }

    /**
     * Set account
     *
     * @param string $account
     *
     * @return Accomodation
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Accomodation
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set employeeCost
     *
     * @param integer $employeeCost
     *
     * @return Accomodation
     */
    public function setEmployeeCost($employeeCost)
    {
        $this->employeeCost = $employeeCost;

        return $this;
    }

    /**
     * Get employeeCost
     *
     * @return integer
     */
    public function getEmployeeCost()
    {
        return $this->employeeCost;
    }

    /**
     * Set town
     *
     * @param string $town
     *
     * @return Accomodation
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Add employee
     *
     * @param \AppBundle\Entity\Employee $employee
     *
     * @return Accomodation
     */
    public function addEmployee(\AppBundle\Entity\Employee $employee)
    {
        $this->employees[] = $employee;

        return $this;
    }

    /**
     * Remove employee
     *
     * @param \AppBundle\Entity\Employee $employee
     */
    public function removeEmployee(\AppBundle\Entity\Employee $employee)
    {
        $this->employees->removeElement($employee);
    }

    /**
     * Get employees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmployees()
    {
        return $this->employees;
    }


    public function __toString(){
        return $this->getOwner();
    }
}
