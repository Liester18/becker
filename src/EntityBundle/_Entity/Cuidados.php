<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NCuidados
 *
 * @ORM\Table(name="cuidados")
 * @ORM\Entity
 */
class Cuidados {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cuidado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="n_cuidados_id_cuidado_seq", allocationSize=1, initialValue=1)
     */
    private $idCuidado;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_cuidado", type="string", length=255, nullable=false)
     */
    private $nomeCuidado;

    /**
     * @ORM\OneToMany(targetEntity="Paciente_Cuidado", mappedBy="cuidado", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     * @ORM\JoinColumn(name="pacientecuidado", referencedColumnName="cuidado_id", nullable=FALSE)
     */
    private $pacienteCuidado;

    /**
     * Constructor
     */
    public function __construct() {
        $this->pacienteCuidado = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idCuidado
     *
     * @return integer 
     */
    public function getIdCuidado() {
        return $this->idCuidado;
    }

    /**
     * Set nomeCuidado
     *
     * @param string $nomeCuidado
     * @return NCuidados
     */
    public function setNomeCuidado($nomeCuidado) {
        $this->nomeCuidado = $nomeCuidado;

        return $this;
    }

    /**
     * Get nomeCuidado
     *
     * @return string 
     */
    public function getNomeCuidado() {
        return $this->nomeCuidado;
    }

    public function getPacienteCuidado() {
        return $this->pacienteCuidado->toArray();
    }

    public function addPacienteCuidado(Paciente_Cuidado $p_cuidado) {
        if (!$this->pacienteCuidado->contains($p_cuidado)) {
            $this->pacienteCuidado->add($o_responsavel);
            $p_cuidado->setCuidado($this);
        }

        return $this;
    }

    public function removePacienteCuidado(Paciente_Cuidado $p_cuidado) {
        if ($this->pacienteCuidado->contains($p_cuidado)) {
            $this->pacienteCuidado->removeElement($p_cuidado);
            $p_cuidado->setCuidado(null);
        }

        return $this;
    }

    public function getPacientes() {
        return array_map(
                function ($pacienteCuidado) {
            return $pacienteCuidado->getPaciente();
        }, $this->pacienteCuidado->toArray()
        );
    }

    public function __toString() {
        return $this->getNomeCuidado();
    }

}
