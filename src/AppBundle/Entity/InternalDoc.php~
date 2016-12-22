<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InternalDoc
 *
 * @ORM\Table(name="internal_doc")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InternalDocRepository")
 */
class InternalDoc
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_conclusion", type="date")
     */
    private $dateOfConclusion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_from", type="date")
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_to", type="date")
     */
    private $dateTo;

    /**
     * @ORM\ManyToOne(targetEntity="Position", inversedBy="internalDocs")
     * @ORM\JoinColumn(name="position_id", referencedColumnName="id")
     */
    private $position;


    /**
     * @ORM\ManyToOne(targetEntity="Employee", inversedBy="internalDocs")
     * @ORM\JoinColumn(name="employee_id", referencedColumnName="id")
     */
    private $employee;

    /**
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="internalDocs")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $company;



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
     * Set dateOfConclusion
     *
     * @param \DateTime $dateOfConclusion
     * @return InternalDoc
     */
    public function setDateOfConclusion($dateOfConclusion)
    {
        $this->dateOfConclusion = $dateOfConclusion;

        return $this;
    }

    /**
     * Get dateOfConclusion
     *
     * @return \DateTime 
     */
    public function getDateOfConclusion()
    {
        return $this->dateOfConclusion;
    }

    /**
     * Set dateFrom
     *
     * @param \DateTime $dateFrom
     * @return InternalDoc
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return \DateTime 
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param \DateTime $dateTo
     * @return InternalDoc
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return \DateTime 
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set position
     *
     * @param \AppBundle\Entity\Position $position
     * @return InternalDoc
     */
    public function setPosition(\AppBundle\Entity\Position $position = null)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return \AppBundle\Entity\Position 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set employee
     *
     * @param \AppBundle\Entity\Employee $employee
     * @return InternalDoc
     */
    public function setEmployee(\AppBundle\Entity\Employee $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \AppBundle\Entity\Employee 
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     * @return InternalDoc
     */
    public function setCompany(\AppBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \AppBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }
}
