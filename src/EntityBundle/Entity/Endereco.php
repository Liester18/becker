<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Endereco
 *
 * @ORM\Table(name="endereco")
 * @ORM\Entity
 */
class Endereco
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_endereco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="endereco_id_endereco_seq", allocationSize=1, initialValue=1)
     */
    private $idEndereco;

    /**
     * @var integer
     *
     * @ORM\Column(name="cep", type="integer", nullable=true)
     */
    private $cep;
    //20000-000 a 28999-999


    /**
     * @var string
     *
     * @ORM\Column(name="logradouro", type="string", nullable=true)
     */
	private $logradouro;

    
    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", nullable=true)
     */
	private $complemento;
	
	/**
     * @var string
     *
     * @ORM\Column(name="barrio", type="string", nullable=true)
     */
	private $barrio;
	
	/**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", nullable=true)
     */
	private $cidade;
	
	
     /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_id", referencedColumnName="id")
     * })
     */
    private $estado;
    
     /**
     * 
     * @ORM\OneToMany(targetEntity="Responsavel", mappedBy="endereco", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="responsavel_id", referencedColumnName="id_responsavel") 
     * 
     */
    private $responsavel;
        

    public function __construct() {
        $this->responsavel = new ArrayCollection();
    }
    /**
     * Get idEndereco
     *
     * @return integer 
     */
    public function getIdEndereco()
    {
        return $this->idEndereco;
    }

    /**
     * Set cep
     *
     * @param integer $cep
     * @return Endereco
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return integer 
     */
    public function getCep()
    {
        return $this->cep;
    }
    
    
    public function setBarrio($barrio)
    {
        $this->barrio = $barrio;

        return $this;
    }

   public function getBarrio()
    {
        return $this->barrio;

        
    }

    
    public function getComplemento()
    {
        return $this->complemento;
    }
    
     public function setComplemento($comp)
    {
        $this->complemento = $comp;

        return $this;
    }

    public function getLogradouro()
    {
        return $this->logradouro;
    }
    
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
        return $this->logradouro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }
    
     public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }
    
    public function getEstado()
    {
        return $this->estado;
    }
    
     public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }
    
    public function setResponsavel(ArrayCollection $responsavel){
         
        $this->responsavel = $responsavel;
        foreach ($responsavel as $resp) {
            $resp->setEndereco($this); 
        }
    }
    
    public function getResponsavel(){
        return $this->responsavel;
    }


    public function __toString() {
        return strval($this->getCep());
    }
}
