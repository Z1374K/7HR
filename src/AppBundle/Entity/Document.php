<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocumentRepository")
 */
class Document
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
     * @ORM\ManyToOne(targetEntity="Employee", inversedBy="document")
     * @ORM\JoinColumn(name="employees_id", referencedColumnName="id")
     */
    private $employees;






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
     * @return Document
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
     * Set employees
     *
     * @param \AppBundle\Entity\Employee $employees
     * @return Document
     */
    public function setEmployees(\AppBundle\Entity\Employee $employees = null)
    {
        $this->employees = $employees;

        return $this;
    }

    /**
     * Get employees
     *
     * @return \AppBundle\Entity\Employee 
     */
    public function getEmployees()
    {
        return $this->employees;
    }
}
