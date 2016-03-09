<?php

namespace EntityBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * NTipoSanguineo
 *
 * @ORM\Table(name="tipo_sanguineo")
 * @ORM\Entity
 */
class TipoSanguineo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtiposanguineo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="n_tipo_sanguineo_id_tipo_sanguineo_seq", allocationSize=1, initialValue=1)
     */
    private $idTipoSanguineo;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=3, nullable=false)
     */
    private $nome;

    /**
     * @ORM\OneToMany(targetEntity="Paciente", mappedBy="tipoSanguineo", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="paciente_id", referencedColumnName="id_paciente", nullable=FALSE)
     */
    private $paciente;

    
    public function __construct($tipoNome) {
        $this->nome = $tipoNome;
        $this->paciente = new ArrayCollection();
    }

    /**
     * Get idTipoSanguineo
     *
     * @return integer 
     */
    public function getIdTipoSanguineo()
    {
        return $this->idTipoSanguineo;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return NTipoSanguineo
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    public function addPaciente(Paciente $paciente)
    {
        $this->paciente[] = $paciente;
        $paciente->setTipoSanguineo($this);
    }

    public function removePaciente(Paciente $paciente)
    {
        if ($this->paciente->contains($paciente)) {
            $this->paciente->removeElement($paciente);
            $paciente->setTipoSanguineo(null);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getNome();
    }
}