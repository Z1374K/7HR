<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * WorkLoad
 *
 * @ORM\Table(name="work_load")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WorkLoadRepository")
 * @ORM\HasLifecycleCallbacks()
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
     * @ORM\Column(name="hours_with_fifty", type="integer")
     */
    private $hoursWithFifty;
    /**
     * @var int
     *
     * @ORM\Column(name="hours_with_houndred", type="integer")
     */
    private $hoursWithHoundred;

    /**
     * @ORM\ManyToOne(targetEntity="Employee", inversedBy="workLoads")
     * @ORM\JoinColumn(name="employee_id", referencedColumnName="id")
     */
    private $employee;


    /**
     * @ORM\ManyToOne(targetEntity="Position", inversedBy="workLoads")
     * @ORM\JoinColumn(name="position_id", referencedColumnName="id")
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="workLoads")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $company;
    /**
     * @var \string
     * @Assert\Date()
     * @ORM\Column(name="date_from", type="string", length=50)
     */
    private $dateFrom;
    /**
     * @var \string
     * @Assert\Date()
     * @ORM\Column(name="date_to", type="string", length=50)
     */
    private $dateTo;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;
    /**
     * @var float
     *
     * @ORM\Column(name="netto", type="float")
     */
    private $netto;
    /**
     * @var float
     *
     * @ORM\Column(name="wages", type="float")
     */
    private $wages;



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
     * Set hoursWithFifty
     *
     * @param integer $hoursWithFifty
     *
     * @return WorkLoad
     */
    public function setHoursWithFifty($hoursWithFifty)
    {
        $this->hoursWithFifty = $hoursWithFifty;

        return $this;
    }

    /**
     * Get hoursWithFifty
     *
     * @return integer
     */
    public function getHoursWithFifty()
    {
        return $this->hoursWithFifty;
    }

    /**
     * Set hoursWithHoundred
     *
     * @param integer $hoursWithHoundred
     *
     * @return WorkLoad
     */
    public function setHoursWithHoundred($hoursWithHoundred)
    {
        $this->hoursWithHoundred = $hoursWithHoundred;

        return $this;
    }

    /**
     * Get hoursWithHoundred
     *
     * @return integer
     */
    public function getHoursWithHoundred()
    {
        return $this->hoursWithHoundred;
    }

    /**
     * Set employee
     *
     * @param \AppBundle\Entity\Employee $employee
     *
     * @return WorkLoad
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
     * Set position
     *
     * @param \AppBundle\Entity\Position $position
     *
     * @return WorkLoad
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
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return WorkLoad
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

    /**
     * Set dateFrom
     *
     * @param integer $dateFrom
     *
     * @return WorkLoad
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return integer
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param integer $dateTo
     *
     * @return WorkLoad
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return integer
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return WorkLoad
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }


    /** @ORM\PrePersist()
     *
     */
    public function calculateTotal()
    {
        $total = $this->getHoursInMnth()*$this->getPosition()->getRate();
        $totalFifty = $this->getHoursWithFifty()*($this->getPosition()->getRate())*1.5;
        $totalHoundred = $this->getHoursWithHoundred()*($this->getPosition()->getRate())*2;
        $this->setTotal($total+$totalFifty+$totalHoundred);

        $this->setNetto( $this->calculatNetto($total) );
        $this->setWages( $this->wages($this->getTotal(),$this->getNetto()));
    }

    public function calculatNetto($total){
        $netto = $total - ($this->getEmployee()->getAccomodation()->getEmployeeCost());
        return $netto;
    }
    private function wages($total, $netto){
        $wages = $this->total - $this->netto;;
        return $wages;

    }


    /**
     * Set netto
     *
     * @param float $netto
     *
     * @return WorkLoad
     */
    public function setNetto($netto)
    {
        $this->netto = $netto;

        return $this;
    }

    /**
     * Get netto
     *
     * @return float
     */
    public function getNetto()
    {
        return $this->netto;
    }

    /**
     * Set wages
     *
     * @param float $wages
     *
     * @return WorkLoad
     */
    public function setWages($wages)
    {
        $this->wages = $wages;

        return $this;
    }

    /**
     * Get wages
     *
     * @return float
     */
    public function getWages()
    {
        return $this->wages;
    }
}
