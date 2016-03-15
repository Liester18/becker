<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente_Cuidado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Paciente_Cuidado
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
     * @ORM\ManyToOne(targetEntity="Paciente", inversedBy="nCuidados")
     * @ORM\JoinColumn(name="paciente_id", referencedColumnName="id_paciente", nullable=FALSE)
     */
    private $paciente;

    /**
     * @ORM\ManyToOne(targetEntity="Cuidados", inversedBy="pacienteCuidado")
     *@ORM\JoinColumn(name="cuidado_id", referencedColumnName="id_cuidado", nullable=FALSE)
     */
    private $cuidado;

    /**
     * @var smallint
     *
     * @ORM\Column(name="horas", type="smallint", nullable=true)
     */
    private $horas;


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
     * @param Cuidados $responsavel
     * @return Responsavel_Paciente
     */
    public function setCuidado($cuidados)
    {
        $this->cuidado = $cuidados;

        return $this;
    }

    /**
     * Get idResponsavel
     *
     * @return integer 
     */
    public function getCuidado()
    {
        return $this->cuidado;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Responsavel_Paciente
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getHoras()
    {
        return $this->horas;
    }
}
