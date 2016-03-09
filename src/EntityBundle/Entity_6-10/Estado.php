<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Estado
 *
 * @ORM\Table(name="estado")
 * @ORM\Entity
 */
class Estado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="estado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", nullable=false)
     */
	private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="abrv", type="string", nullable=false)
     */
    //private $abrv;
	
	
    /**
     * Get idEndereco
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    
    public function getNome()
    {
        return $this->nome;
    }

    /*public function setAbrv($abrv)
    {
        $this->abrv = $abrv;

        return $this;
    }


    public function getAbrv()
    {
        return $this->abrv;
    }*/
    
   

    public function __toString() {
        return strval($this->nome);
    }
}
