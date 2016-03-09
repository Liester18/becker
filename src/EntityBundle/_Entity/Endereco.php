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
     * @ORM\Column(name="cep", type="integer", nullable=false)
     */
    private $cep;

     /**
     * 
     * @ORM\OneToMany(targetEntity="Responsavel", mappedBy="endereco")
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
