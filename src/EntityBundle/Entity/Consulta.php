<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Consulta
 *
 * @ORM\Table(name="consulta")
 * @ORM\Entity
 */
class Consulta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_consulta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="consulta_id_consulta_seq", allocationSize=1, initialValue=1)
     */
    private $idConsulta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     * @Assert\NotBlank( message = "A data inserida é invalida")
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=500, nullable=true)
     */
    private $observacao;

    /**
     * @var \Paciente
     *
     * @ORM\ManyToOne(targetEntity="Paciente", inversedBy="consulta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paciente_id", referencedColumnName="id_paciente")
     * })
     *  
     */
    private $paciente;
    
    /**
     * @var string
     *
     * @ORM\Column(name="receita", type="string", length=1000, nullable=true)
     */
    private $receita;
    
    /**
     * @var blob
     *
     * @ORM\Column(name="metodo", type="blob", nullable=true)
     */
    private $metodo;



    /**
     * Get idConsulta
     *
     * @return integer 
     */
    public function getIdConsulta()
    {
        return $this->idConsulta;
    }
    
    /**
     * Get receita
     *
     * @return string 
     */
    public function getReceita() {
        return $this->receita;
    }
    
    /**
     * Set setReceita
     *
     * @param string $receita
     * @return Consulta
     */
    public function setReceita($receita) {
        $this->receita = $receita;

        return $this;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Consulta
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     * @return Consulta
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string 
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set paciente
     *
     * @param \EntityBundle\Entity\Paciente $paciente
     * @return Consulta
     */
    public function setPaciente(\EntityBundle\Entity\Paciente $paciente)
    {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get paciente
     *
     * @return \EntityBundle\Entity\Paciente 
     */
    public function getPaciente()
    {
        return $this->paciente;
    }
    
    /**
     * Set metodo
     *
     * @param blob
     * @return Consulta
     */
    public function setMetodo($metodo)
    {
        $this->metodo = $metodo;

        return $this;
    }

    /**
     * Get metodo
     *
     * @return blob 
     */
    public function getMetodo()
    {
        return $this->metodo;
    }
    
    public function __toString() {
        return $this->getObservacao();
    }
}
