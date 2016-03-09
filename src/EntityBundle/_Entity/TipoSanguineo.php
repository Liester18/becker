<?php

namespace EntityBundle\Entity;

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
    
    public function __construct($tipoNome) {
        $this->nome = $tipoNome;
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

    public function __toString()
    {
        return $this->getNome();
    }
}