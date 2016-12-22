<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="nazwisko", type="string", length=255)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="imie", type="string", length=255)
     */
    private $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="data_ur", type="string", length=255)
     */
    private $dataUr;

    /**
     * @var string
     *
     * @ORM\Column(name="miejsce_ur", type="string", length=255)
     */
    private $miejsceUr;

    /**
     * @var string
     *
     * @ORM\Column(name="miejsce_zam", type="string", length=255)
     */
    private $miejsceZam;

    /**
     * @var string
     *
     * @ORM\Column(name="ulica", type="string", length=255)
     */
    private $ulica;

    /**
     * @var string
     *
     * @ORM\Column(name="obywatelstwo", type="string", length=255)
     */
    private $obywatelstwo;

    /**
     * @var string
     *
     * @ORM\Column(name="nr_paszportu", type="string", length=255)
     */
    private $nrPaszportu;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


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
     * Set nazwisko
     *
     * @param string $nazwisko
     * @return Employee
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string 
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set imie
     *
     * @param string $imie
     * @return Employee
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string 
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set dataUr
     *
     * @param string $dataUr
     * @return Employee
     */
    public function setDataUr($dataUr)
    {
        $this->dataUr = $dataUr;

        return $this;
    }

    /**
     * Get dataUr
     *
     * @return string 
     */
    public function getDataUr()
    {
        return $this->dataUr;
    }

    /**
     * Set miejsceUr
     *
     * @param string $miejsceUr
     * @return Employee
     */
    public function setMiejsceUr($miejsceUr)
    {
        $this->miejsceUr = $miejsceUr;

        return $this;
    }

    /**
     * Get miejsceUr
     *
     * @return string 
     */
    public function getMiejsceUr()
    {
        return $this->miejsceUr;
    }

    /**
     * Set miejsceZam
     *
     * @param string $miejsceZam
     * @return Employee
     */
    public function setMiejsceZam($miejsceZam)
    {
        $this->miejsceZam = $miejsceZam;

        return $this;
    }

    /**
     * Get miejsceZam
     *
     * @return string 
     */
    public function getMiejsceZam()
    {
        return $this->miejsceZam;
    }

    /**
     * Set ulica
     *
     * @param string $ulica
     * @return Employee
     */
    public function setUlica($ulica)
    {
        $this->ulica = $ulica;

        return $this;
    }

    /**
     * Get ulica
     *
     * @return string 
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * Set obywatelstwo
     *
     * @param string $obywatelstwo
     * @return Employee
     */
    public function setObywatelstwo($obywatelstwo)
    {
        $this->obywatelstwo = $obywatelstwo;

        return $this;
    }

    /**
     * Get obywatelstwo
     *
     * @return string 
     */
    public function getObywatelstwo()
    {
        return $this->obywatelstwo;
    }

    /**
     * Set nrPaszportu
     *
     * @param string $nrPaszportu
     * @return Employee
     */
    public function setNrPaszportu($nrPaszportu)
    {
        $this->nrPaszportu = $nrPaszportu;

        return $this;
    }

    /**
     * Get nrPaszportu
     *
     * @return string 
     */
    public function getNrPaszportu()
    {
        return $this->nrPaszportu;
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
}
