<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NTipoParto
 *
 * @ORM\Table(name="tipo_parto")
 * @ORM\Entity
 */
class TipoParto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtipoparto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="id_tipo_parto_id_tipo_parto_seq", allocationSize=1, initialValue=1)
     */
    private $idTipoParto;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_parto", type="string", length=20, nullable=false)
     */
    private $tipoParto;

    /**
     * @ORM\OneToMany(targetEntity="Paciente", mappedBy="tipoParto", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="paciente_id", referencedColumnName="id_paciente", nullable=FALSE)
     */
    private $paciente;


    public function __construct($tipoParto) {
        $this->tipoParto = $tipoParto;
        $this->paciente = new ArrayCollection();
    }
    /**
     * Get idTipoParto
     *
     * @return integer 
     */
    public function getIdTipoParto()
    {
        return $this->idTipoParto;
    }

    /**
     * Set tipoParto
     *
     * @param string $tipoParto
     * @return TipoParto
     */
    /*public function setTipoParto($tipoParto)
    {
        $this->tipoParto = $tipoParto;

        return $this;
    }*/

    /**
     * Get tipoParto
     *
     * @return string 
     */
    public function getTipoParto()
    {
        return $this->tipoParto;
    }

    public function addPaciente(Paciente $paciente)
    {
        $this->paciente[] = $paciente;
        $paciente->setTipoParto($this);


    }

    public function removePaciente(Paciente $paciente)
    {
        if ($this->pacienteproblemasSaude->contains($paciente)) {
            $this->pacienteproblemasSaude->removeElement($paciente);
            $paciente->setTipoParto(null);
        }

        return $this;
    }

    public function __toString() {
        return $this->tipoParto;
    }
    
   
    
}
