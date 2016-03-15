<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsavel_Paciente
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Orden_Responsavel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

   /**
     * @ORM\ManyToOne(targetEntity="Paciente", inversedBy="ordenResponsavels")
     * @ORM\JoinColumn(name="paciente_id", referencedColumnName="id_paciente", nullable=FALSE)
     */
    private $paciente;

    /**
     * @ORM\ManyToOne(targetEntity="Responsavel", inversedBy="ordenResponsavels", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="responsavel_id", referencedColumnName="id_responsavel", nullable=FALSE)
     */
    private $responsavel;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="smallint")
     */
    private $orden;


    /*public function __construct($paciente, $responsabel) {
        $this->responsavel =  $responsabel;
        $this
        ;
    }*/
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
     * Set idPaciente
     *
     * @param Paciente $pPaciente
     * @return Orden_Responsavel
     */
    public function setPaciente(Paciente $paciente = null)
    {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get idPaciente
     *
     * @return integer 
     */
    public function getPaciente()
    {
        return $this->paciente;
    }

    /**
     * Set idResponsavel
     *
     * @param Responsavel $responsavel
     * @return Responsavel_Paciente
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Get idResponsavel
     *
     * @return integer 
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Responsavel_Paciente
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }
}
