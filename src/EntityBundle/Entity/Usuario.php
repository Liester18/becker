<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario implements UserInterface, \Serializable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30, nullable=true)
     * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     * @Assert\NotBlank()
     */
    private $password;
    
    /**
     * @var \NRol
     *
     * @ORM\ManyToOne(targetEntity="NRol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol", referencedColumnName="id")
     * })
     * @Assert\NotBlank()
     */
    private $rol;
    
    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     * @Assert\NotBlank()
     */
    private $salt;

    /**
     * Constructor
     */
    /* public function __construct()
      {
      $this->proyecto = new \Doctrine\Common\Collections\ArrayCollection();
      } */

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    
    /**
     * Set rol
     *
     * @param \EntityBundle\Entity\NRol $rol
     * @return Usuario
     */
    public function setRol(\EntityBundle\Entity\NRol $rol = null) {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \EntityBundle\Entity\NRol 
     */
    public function getRol() {
        return $this->rol;
    }

    
    public function setSalt($salt) {
        $this->salt = $salt;
    }

    public function eraseCredentials() {
        
    }

    public function getRoles() {
        return array($this->getRol()->getNombre());
    }

    public function getSalt() {
        return $this->salt;
    }

    public function serialize() {
        return serialize(array($this->getId()));
    }

    public function unserialize($serialized) {
        $ar = unserialize($serialized);
        $this->id = ($ar[0]);
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    /**
     * Constructor
     */
    public function __construct() {
        //$this->proyecto = new \Doctrine\Common\Collections\ArrayCollection();        
    }   

}