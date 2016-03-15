<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente_ProblemasSaude
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Paciente_ProblemasSaude {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Paciente", inversedBy="pacienteproblemasSaude")
     * @ORM\JoinColumn(name="paciente_id", referencedColumnName="id_paciente", nullable=FALSE)
     */
    private $paciente;

    /**
     * @ORM\ManyToOne(targetEntity="ProblemasSaude", inversedBy="pacienteProblemasSaude", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="problemassaude_id", referencedColumnName="id_problemassaude", nullable=FALSE)
     */
    private $problemaSaude;

    /**
     * @var smallint
     *
     * @ORM\Column(name="edade_diagnostico", type="smallint", nullable=false)
     */
    private $edadeDiagnostico;

    /**
     * @var string
     *
     * @ORM\Column(name="detalhes_psalud", type="string", length=255, nullable=true)
     */
    private $detalhes_psalud;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function setEdadeDiagnostico($edadeDiag) {
        $this->edadeDiagnostico = $edadeDiag;

        return $this;
    }

    public function getEdadeDiagnostico() {
        return $this->edadeDiagnostico;
    }

    public function setPaciente(Paciente $paciente = null) {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get idPaciente
     *
     * @return integer 
     */
    public function getPaciente() {
        return $this->paciente;
    }

    public function setDetalhesPsalud($detalhes = null) {
        $this->detalhes_psalud = $detalhes;

        return $this;
    }

    public function getDetalhesPsalud() {
        return $this->detalhes_psalud;
    }

    /**
     * Set idResponsavel
     *
     * @param ProblemasSaude $problemasaude
     * @return Paciente_ProblemasSaude
     */
    public function setProblemaSaude($problemasaude) {
        $this->problemaSaude = $problemasaude;

        return $this;
    }

    /**
     * Get idResponsavel
     *
     * @return integer 
     */
    public function getProblemaSaude() {
        return $this->problemaSaude;
    }


}
