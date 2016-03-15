<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 *
 * @ORM\Table(name="paciente")
 * @ORM\Entity
 */
class Paciente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_paciente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="paciente_id_paciente_seq", allocationSize=1, initialValue=1)
     */
    private $idPaciente;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="edad", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="date", nullable=true)
     */
    private $dataNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="problemas_gravidez", type="string", length=500, nullable=true)
     */
    private $problemasGravidez;

    /**
     * @var boolean
     *
     * @ORM\Column(name="leite_artificial", type="boolean", nullable=false)
     */
    private $leiteArtificial;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="sex", type="boolean", nullable=false)
     */
    private $sex;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="depressao_puerperal", type="string", length=500, nullable=true)
     */
    private $depressaoPuerperal;

    /**
     * @var string
     *
     * @ORM\Column(name="problemas_posparto", type="string", length=500, nullable=true)
     */
    private $problemasPosparto;

    /**
     * @var integer
     *
     * @ORM\Column(name="leite_materno_exclusivo", type="boolean", nullable=true)
     */
    private $leiteMaternoExclusivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="leite_materno_idade", type="integer", nullable=true)
     */
    private $leiteMaternoIdade;

    /**
     * @var \TipoParto
     *
     * @ORM\ManyToOne(targetEntity="TipoParto", inversedBy="paciente",cascade={"persist", "remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoParto", referencedColumnName="idtipoparto")
     * })
     */
    private $tipoParto;

    /**
     * @var \TipoSanguineo
     *
     * @ORM\ManyToOne(targetEntity="TipoSanguineo", inversedBy="paciente",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoSanguineo", referencedColumnName="idtiposanguineo")
     * })
     */
    private $tipoSanguineo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Paciente_Cuidado", mappedBy="paciente", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     *   @ORM\JoinColumn(name="pacientecuidados_id", referencedColumnName="id")
     */
    private $pacienteCuidados;

   /**
     * @var \Doctrine\Common\Collections\Collection
    *
     * @ORM\OneToMany(targetEntity="Paciente_ProblemasSaude", mappedBy="paciente", cascade={"persist", "remove"}, orphanRemoval=TRUE)
    *   @ORM\JoinColumn(name="pacienteproblemasSaude_id", referencedColumnName="id")
     */
    private $pacienteproblemasSaude;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Orden_Responsavel", mappedBy="paciente", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     * @ORM\JoinColumn(name="ordenresponsavels_id", referencedColumnName="id")
     */
    private $ordenResponsavels;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Consulta", mappedBy="paciente", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     * @ORM\JoinColumn(name="consulta_id", referencedColumnName="id_consulta")
     */
    private $consulta;
    
        
    /**
     * Constructor
     */
    public function __construct()
    {
       $this->pacienteCuidados = new \Doctrine\Common\Collections\ArrayCollection();
       $this->pacienteproblemasSaude = new \Doctrine\Common\Collections\ArrayCollection();
       $this->ordenResponsavels = new \Doctrine\Common\Collections\ArrayCollection();       
       $this->consulta = new \Doctrine\Common\Collections\ArrayCollection();
       $this->leiteArtificial = false;
    }


    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }
    
    /**
     * Set edad
     *
     * @param string $nome
     * @return Paciente
     */
    public function setEdad($edad){
        $this->edad = $edad;
        return $this;
    }
    
    /**
     * Get idPaciente
     *
     * @return integer 
     */
    public function getIdPaciente()
    {
        return $this->idPaciente;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Paciente
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

    /**
     * Set dataNascimento
     *
     * @param \DateTime $dataNascimento
     * @return Paciente
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    /**
     * Get dataNascimento
     *
     * @return \DateTime 
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

   
    /**
     * Set problemasGravidez
     *
     * @param string $problemasGravidez
     * @return Paciente
     */
    public function setProblemasGravidez($problemasGravidez)
    {
        $this->problemasGravidez = $problemasGravidez;

        return $this;
    }

    /**
     * Get problemasGravidez
     *
     * @return string 
     */
    public function getProblemasGravidez()
    {
        return $this->problemasGravidez;
    }

    /**
     * Set sex
     *
     * @param boolean $sex
     * @return Paciente
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }
    
    /**
     * Set active
     *
     * @param boolean $active
     * @return Paciente
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
    
    /**
     * Set leiteArtificial
     *
     * @param boolean $leiteArtificial
     * @return Paciente
     */
    public function setLeiteArtificial($leiteArtificial)
    {
        $this->leiteArtificial = $leiteArtificial;

        return $this;
    }
    
    /**
     * Get leiteArtificial
     *
     * @return boolean 
     */
    public function getLeiteArtificial()
    {
        return $this->leiteArtificial;
    }

    /**
     * Get sex
     *
     * @return boolean 
     */
    public function getSex()
    {
        return $this->sex;
    }
    
    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set depressaoPuerperal
     *
     * @param string $depressaoPuerperal
     * @return Paciente
     */
    public function setDepressaoPuerperal($depressaoPuerperal)
    {
        $this->depressaoPuerperal = $depressaoPuerperal;

        return $this;
    }

    /**
     * Get depressaoPuerperal
     *
     * @return string 
     */
    public function getDepressaoPuerperal()
    {
        return $this->depressaoPuerperal;
    }

    /**
     * Set problemasPosparto
     *
     * @param string $problemasPosparto
     * @return Paciente
     */
    public function setProblemasPosparto($problemasPosparto)
    {
        $this->problemasPosparto = $problemasPosparto;

        return $this;
    }

    /**
     * Get problemasPosparto
     *
     * @return string 
     */
    public function getProblemasPosparto()
    {
        return $this->problemasPosparto;
    }

    /**
     * Set leiteMaternoExclusivo
     *
     * @param integer $leiteMaternoExclusivo
     * @return Paciente
     */
    public function setLeiteMaternoExclusivo($leiteMaternoExclusivo)
    {
        $this->leiteMaternoExclusivo = $leiteMaternoExclusivo;

        return $this;
    }

    /**
     * Get leiteMaternoExclusivo
     *
     * @return integer 
     */
    public function getLeiteMaternoExclusivo()
    {
        return $this->leiteMaternoExclusivo;
    }

    /**
     * Set leiteMaternoIdade
     *
     * @param integer $leiteMaternoIdade
     * @return Paciente
     */
    public function setLeiteMaternoIdade($leiteMaternoIdade)
    {
        $this->leiteMaternoIdade = $leiteMaternoIdade;

        return $this;
    }

    /**
     * Get leiteMaternoIdade
     *
     * @return integer 
     */
    public function getLeiteMaternoIdade()
    {
        return $this->leiteMaternoIdade;
    }


    /*public function setEndereco(\EntityBundle\Entity\Endereco $endereco = null)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return \EntityBundle\Entity\Endereco 
     */
    /*public function getEndereco()
    {
        return $this->endereco;
    }*/

    /**
     * Set TipoParto
     *
     * @param \EntityBundle\Entity\TipoParto $tipoParto
     * @return Paciente
     */
    public function setTipoParto(\EntityBundle\Entity\TipoParto $tipoParto = null)
    {
        $this->tipoParto = $tipoParto;

        return $this;
    }

    /**
     * Get TipoParto
     *
     * @return \EntityBundle\Entity\TipoParto 
     */
    public function getTipoParto()
    {
        return $this->tipoParto;
    }

    /**
     * Set nTipoSanguineo
     *
     * @param \EntityBundle\Entity\TipoSanguineo $tipoSanguineo
     * @return Paciente
     */
    public function setTipoSanguineo(\EntityBundle\Entity\TipoSanguineo $nTipoSanguineo)
    {
        $this->tipoSanguineo = $nTipoSanguineo;

        return $this;
    }

    /**
     * Get TipoSanguineo
     *
     * @return \EntityBundle\Entity\TipoSanguineo 
     */
    public function getTipoSanguineo()
    {
        return $this->tipoSanguineo;
    }


    public function getPacienteCuidados()
    {

    return $this->pacienteCuidados;
   }
    /**
     * Add nCuidados
     *
     * @param \EntityBundle\Entity\Cuidados $nCuidados
     * @return Paciente
     */
    public function addPacienteCuidado(\EntityBundle\Entity\Paciente_Cuidado $nCuidados)
    {
        if (!$this->pacienteCuidados->contains($nCuidados)) {
            $this->pacienteCuidados->add($nCuidados);
            $nCuidados->setPaciente($this);
        }

        return $this;
    }

    /**
     * Remove nCuidados
     *
     * @param \EntityBundle\Entity\Paciente_Cuidado $nCuidados
     * @return Paciente
     */
    public function removePacienteCuidado(\EntityBundle\Entity\Paciente_Cuidado $nCuidados)
    {
         $this->pacienteCuidados->removeElement($nCuidados);
        if ($this->pacienteCuidados->contains($nCuidados)) {
            $this->pacienteCuidados->removeElement($nCuidados);
            $nCuidados->setPaciente(null);
        }
        
        return $this;
    }

    /**
     * Get nCuidados
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCuidados()
    {
        /*return array_map(
            function ($nCuidados) {
                return $nCuidados->getCuidado();
            },
            $this->nCuidados->toArray()
        );*/
        $pc_l = [];
        foreach ($this->pacienteCuidados as $pc)
            $pc_l[] = $pc->getCuidado();
        return $pc_l;
    }

    /**
     * Add Paciente_ProblemasSaude
     *
     * @param \EntityBundle\Entity\ProblemasSaude $nProblemasSaude
     * @return Paciente
     */
    public function addPacienteProblemasSaude(\EntityBundle\Entity\Paciente_ProblemasSaude $p_problemassaude = null)
    {
         if (!$this->pacienteproblemasSaude->contains($p_problemassaude) && $p_problemassaude != null) {
            $this->pacienteproblemasSaude->add($p_problemassaude);
            $p_problemassaude->setPaciente($this);
        }

        return $this;
    }

    public function getPacienteProblemasSaude()
    {
        return $this->pacienteproblemasSaude;
    }
    
    public function removePacienteProblemasSaude(\EntityBundle\Entity\Paciente_ProblemasSaude $p_problemassaude)
    {
        if ($this->pacienteproblemasSaude->contains($p_problemassaude)) {
            $this->pacienteproblemasSaude->removeElement($p_problemassaude);
            $p_problemassaude->setPaciente(null);
        }
        
        return $this;
    }

    /**
     * Get ProblemasSaude
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProblemasSaude()
    {
        $ps_l = [];
        foreach ($this->pacienteproblemasSaude as $ps)
            $ps_l[] = $ps->getProblemaSaude();
        return $ps_l;
        
        /*return array_map(
            function ($problemasSaude) {
                return $problemasSaude->getProblemaSaude();
            },
            $this->problemasSaude->toArray()
        );*/
    }


    public function getOresponsavel()
    {
        return $this->ordenResponsavels;
    }

    /**
     * 
     *
     * @param \EntityBundle\Entity\Orden_Responsavel $o_responsavel
     * @return Paciente
     */
    public function addOrdenResponsavel(\EntityBundle\Entity\Orden_Responsavel $o_responsavel= null)
    {
        //$this->responsavel[] = $responsavel;

        if (!$this->ordenResponsavels->contains($o_responsavel) && $o_responsavel != null) {
            $this->ordenResponsavels->add($o_responsavel);
            $o_responsavel->setPaciente($this);
        }

        return $this;

    }

    
    /**
     * 
     *
     * @param \EntityBundle\Entity\Responsavel $responsavel
     */
    public function removeOrdenResponsavel(\EntityBundle\Entity\Orden_Responsavel $o_responsavel)
    {
        $this->ordenResponsavels->removeElement($o_responsavel);
        if ($this->ordenResponsavels->contains($o_responsavel)) {
            $this->ordenResponsavels->removeElement($o_responsavel);
            $o_responsavel->setPaciente(null);
        }
        
        return $this;
    }
    
    
    
    public function getOrdenResponsavels()
    {
        return $this->ordenResponsavels;
    }
    
   
    /**
     * Get responsavels
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResponsavels() {
       /* return array_map(
            function ($ordenResponsavels) {
                return $ordenResponsavels->getResponsavel();
            },
            $this->ordenResponsavels->toArray()
        );*/

        $resp = [];
        foreach ($this->ordenResponsavels as $or)
            $resp[] = $or->getResponsavel();
        return $resp;
    }
    
    
    
     /**
     * 
     *
     * @param \EntityBundle\Entity\Consulta $consulta
     * @return Paciente
     */
    public function addConsulta(\EntityBundle\Entity\Consulta $consulta= null)
    {
        //$this->responsavel[] = $responsavel;

        if (!$this->consulta->contains($consulta) && $consulta != null) {
            $this->consulta->add($consulta);
            $consulta->setPaciente($this);
        }

        return $this;

    }

    
    /**
     * 
     *
     * @param \EntityBundle\Entity\Consulta $consulta
     */
    public function removeConsulta(\EntityBundle\Entity\Consulta $consulta)
    {
        $this->consulta->removeElement($consulta);
        if ($this->consulta->contains($consulta)) {
            $this->consulta->removeElement($consulta);
            $consulta->setPaciente(null);
        }
        
        return $this;
    }
    
    
    
    public function getConsulta()
    {
        return $this->consulta;
    }


    
    public function __toString() {
        return $this->nome;
    }

}
