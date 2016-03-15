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
     * @ORM\Column(name="tipo_parto", type="string", length=255, nullable=false)
     */
    private $tipoParto;



    public function __construct($tipoParto) {
        $this->tipoParto = $tipoParto;
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
    
    public function __toString() {
        return $this->tipoParto;
    }
    
   
    
}
