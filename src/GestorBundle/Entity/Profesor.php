<?php

namespace GestorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profesor
 *
 * @ORM\Table(name="profesor")
 * @ORM\Entity(repositoryClass="GestorBundle\Repository\ProfesorRepository")
 */
class Profesor
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
     * @ORM\Column(name="nombreProfesor", type="string", length=255)
     */
    private $nombreProfesor;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidosProfesor", type="string", length=255)
     */
    private $apellidosProfesor;

    /**
     * @var string
     *
     * @ORM\Column(name="departamentoProfesor", type="string", length=255)
     */
    private $departamentoProfesor;

    /*Crearemos la relacion 1Profesor-MuchosAlumnos*/
    /**
    * @ORM\OneToMany(targetEntity="Alumno", mappedBy="profesor")
    */
    private $alumno;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreProfesor
     *
     * @param string $nombreProfesor
     *
     * @return Profesor
     */
    public function setNombreProfesor($nombreProfesor)
    {
        $this->nombreProfesor = $nombreProfesor;

        return $this;
    }

    /**
     * Get nombreProfesor
     *
     * @return string
     */
    public function getNombreProfesor()
    {
        return $this->nombreProfesor;
    }

    /**
     * Set apellidosProfesor
     *
     * @param string $apellidosProfesor
     *
     * @return Profesor
     */
    public function setApellidosProfesor($apellidosProfesor)
    {
        $this->apellidosProfesor = $apellidosProfesor;

        return $this;
    }

    /**
     * Get apellidosProfesor
     *
     * @return string
     */
    public function getApellidosProfesor()
    {
        return $this->apellidosProfesor;
    }

    /**
     * Set departamentoProfesor
     *
     * @param string $departamentoProfesor
     *
     * @return Profesor
     */
    public function setDepartamentoProfesor($departamentoProfesor)
    {
        $this->departamentoProfesor = $departamentoProfesor;

        return $this;
    }

    /**
     * Get departamentoProfesor
     *
     * @return string
     */
    public function getDepartamentoProfesor()
    {
        return $this->departamentoProfesor;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->alumno = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add alumno
     *
     * @param \GestorBundle\Entity\Alumno $alumno
     *
     * @return Profesor
     */
    public function addAlumno(\GestorBundle\Entity\Alumno $alumno)
    {
        $this->alumno[] = $alumno;

        return $this;
    }

    /**
     * Remove alumno
     *
     * @param \GestorBundle\Entity\Alumno $alumno
     */
    public function removeAlumno(\GestorBundle\Entity\Alumno $alumno)
    {
        $this->alumno->removeElement($alumno);
    }

    /**
     * Get alumno
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlumno()
    {
        return $this->alumno;
    }
}
