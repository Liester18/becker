<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NProblemasSaude
 *
 * @ORM\Table(name="problemas_saude")
 * @ORM\Entity
 */
class ProblemasSaude
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_problemassaude", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="n_problemas_saude_id_problemas_saude_seq", allocationSize=1, initialValue=1)
     */
    private $idProblemasSaude;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_psaude", type="string", length=255, nullable=false)
     */
    private $nombrePsaude;

    /**
     * @ORM\OneToMany(targetEntity="Paciente_ProblemasSaude", mappedBy="problemaSaude", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     * @ORM\JoinColumn(name="pacienteproblemassaude_id", referencedColumnName="id", nullable=FALSE)
     */
    private $pacienteProblemasSaude;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pacienteProblemasSaude = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idProblemasSaude
     *
     * @return integer 
     */
    public function getIdProblemasSaude()
    {
        return $this->idProblemasSaude;
    }

    /**
     * Set nombrePsaude
     *
     * @param string $nombrePsaude
     * @return NProblemasSaude
     */
    public function setNombrePsaude($nombrePsaude)
    {
        $this->nombrePsaude = $nombrePsaude;

        return $this;
    }

    /**
     * Get nombrePsaude
     *
     * @return string 
     */
    public function getNombrePsaude()
    {
        return $this->nombrePsaude;
    }

    public function getPacienteProblemasSaude()
    {
        return $this->pacienteProblemasSaude->toArray();
    }
    
    
    public function addPacienteProblemasSaude(Paciente_ProblemasSaude $p_problemassaude)
    {
        if (!$this->pacienteProblemasSaude->contains($p_problemassaude)) {
            $this->pacienteProblemasSaude->add($p_problemassaude);
            $p_problemassaude->setProblemaSaude($this);
        }

        return $this;
    }
    
    public function removePacienteProblemasSaude(Paciente_ProblemasSaude $p_problemassaude)
    {
        if ($this->pacienteProblemasSaude->contains($p_problemassaude)) {
            $this->pacienteProblemasSaude->removeElement($p_problemassaude);
            $p_problemassaude->setProblemaSaude(null);
        }

        return $this;
    }
    
    
    public function getPacientes()
    {
       /* return array_map(
            function ($pacienteProblemasSaude) {
                return $pacienteProblemasSaude->getPaciente();
            },
            $this->pacienteProblemasSaude->toArray()
        );*/

        $pacientes = [];
        foreach ($this->pacienteProblemasSaude as $ps)
            $pacientes[] = $ps->getPaciente();
        return $pacientes;
    }
    
    
    public function __toString() {
        return $this->getNombrePsaude();
       
    } 
}
