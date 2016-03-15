<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsavel
 *
 * @ORM\Table(name="responsavel")
 * @ORM\Entity
 */
class Responsavel {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_responsavel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="responsavel_id_responsavel_seq", allocationSize=1, initialValue=1)
     */
    private $idResponsavel;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="ocupacao", type="string", length=255, nullable=true)
     */
    private $ocupacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="telef_contato", type="string", nullable=true)
     */
    private $telefContato;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\OneToMany(targetEntity="Orden_Responsavel", mappedBy="responsavel", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     * @ORM\JoinColumn(name="ordenresponsavels_id", referencedColumnName="id", nullable=FALSE)
     */
    private $ordenResponsavels;

    
    /**
     * @var \Endereco
     *
     * @ORM\ManyToOne(targetEntity="Endereco", inversedBy="responsavel", cascade={"persist", "remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="endereco_id", referencedColumnName="id_endereco")
     * })
     */
    private $endereco;

    /**
     * Constructor
     */
    public function __construct() {
        /* $this->nome = $nome;
          $this->ocupacao = $ocupacao;
          $this->email = $email;
          $this->telefContato = $tele; */
        $this->ordenResponsavels = new \Doctrine\Common\Collections\ArrayCollection();
        //$this->endereco = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idResponsavel
     *
     * @return integer 
     */
    public function getIdResponsavel() {
        return $this->idResponsavel;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Responsavel
     */
    public function setNome($nome) {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * Set ocupacao
     *
     * @param string $ocupacao
     * @return Responsavel
     */
    public function setOcupacao($ocupacao) {
        $this->ocupacao = $ocupacao;

        return $this;
    }

    /**
     * Get ocupacao
     *
     * @return string 
     */
    public function getOcupacao() {
        return $this->ocupacao;
    }

    /**
     * Set telefContato
     *
     * @param integer $telefContato
     * @return Responsavel
     */
    public function setTelefContato($telefContato) {
        $this->telefContato = $telefContato;

        return $this;
    }

    /**
     * Get telefContato
     *
     * @return integer 
     */
    public function getTelefContato() {
        return $this->telefContato;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Responsavel
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    public function getOrdenResponsavels() {
        return $this->ordenResponsavels->toArray();
    }

    public function addOrdenResponsavel(Orden_Responsavel $o_responsavel) {
        if (!$this->ordenResponsavels->contains($o_responsavel)) {
            $this->ordenResponsavels->add($o_responsavel);
            $o_responsavel->setResponsavel($this);
        }

        return $this;
    }

    public function removeOrdenResponsavel(Orden_Responsavel $o_responsavel) {
        if ($this->ordenResponsavels->contains($o_responsavel)) {
            $this->ordenResponsavels->removeElement($o_responsavel);
            $o_responsavel->setResponsavel(null);
        }

        return $this;
    }

    
    public function getPacientes() {
        
       $pacientes = [];
        foreach ($this->ordenResponsavels as $pa)
            $pacientes[] = $pa->getPaciente();
        return $pacientes;
        
        /*return array_map(
                function ($ordenResponsavels) {
            return $ordenResponsavels->getPaciente();
        }, $this->ordenResponsavels->toArray()
        );*/
    }

    public function setEndereco(\EntityBundle\Entity\Endereco $endereco = null) {
        $this->endereco = $endereco;

        return $this;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    /**
     * Set idPaciente
     *
     * @param integer $idPaciente
     * @return Responsavel
     *
      public function setIdPaciente($idPaciente)
      {
      $this->idPaciente = $idPaciente;

      return $this;
      } */
    /**
     * Get idPaciente
     *
     * @return integer 
     *
      public function getIdPaciente()
      {
      return $this->idPaciente;
      } */
    /**
     * Add paciente
     *
     * @param \EntityBundle\Entity\Paciente $paciente
     * @return Responsavel
     *
      public function addPaciente(\EntityBundle\Entity\Paciente $paciente)
      {
      $this->paciente[] = $paciente;

      return $this;
      } */
    /**
     * Remove paciente
     *
     * @param \EntityBundle\Entity\Paciente $paciente
     *
      public function removePaciente(\EntityBundle\Entity\Paciente $paciente)
      {
      $this->paciente->removeElement($paciente);
      } */

    /**
     * Get paciente
     *
     * @return \Doctrine\Common\Collections\Collection 
     *
      public function getPaciente()
      {
      return $this->paciente;
      } */
    public function __toString() {
        if($this->getNome() == null)
            return 'responsavel';
        else 
            return $this->getNome();
    
    }

}
