<?php

namespace Proxies\__CG__\EntityBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Responsavel extends \EntityBundle\Entity\Responsavel implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'idResponsavel', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'nome', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'ocupacao', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'telefContato', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'telefContato_2', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'email', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'ordenResponsavels', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'endereco');
        }

        return array('__isInitialized__', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'idResponsavel', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'nome', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'ocupacao', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'telefContato', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'telefContato_2', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'email', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'ordenResponsavels', '' . "\0" . 'EntityBundle\\Entity\\Responsavel' . "\0" . 'endereco');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Responsavel $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdResponsavel()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdResponsavel();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdResponsavel', array());

        return parent::getIdResponsavel();
    }

    /**
     * {@inheritDoc}
     */
    public function setNome($nome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNome', array($nome));

        return parent::setNome($nome);
    }

    /**
     * {@inheritDoc}
     */
    public function getNome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNome', array());

        return parent::getNome();
    }

    /**
     * {@inheritDoc}
     */
    public function setOcupacao($ocupacao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOcupacao', array($ocupacao));

        return parent::setOcupacao($ocupacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getOcupacao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOcupacao', array());

        return parent::getOcupacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefContato($telefContato)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefContato', array($telefContato));

        return parent::setTelefContato($telefContato);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefContato()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefContato', array());

        return parent::getTelefContato();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefContato2($telefContato)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefContato2', array($telefContato));

        return parent::setTelefContato2($telefContato);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefContato2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefContato2', array());

        return parent::getTelefContato2();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdenResponsavels()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdenResponsavels', array());

        return parent::getOrdenResponsavels();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrdenResponsavel(\EntityBundle\Entity\Orden_Responsavel $o_responsavel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrdenResponsavel', array($o_responsavel));

        return parent::addOrdenResponsavel($o_responsavel);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOrdenResponsavel(\EntityBundle\Entity\Orden_Responsavel $o_responsavel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOrdenResponsavel', array($o_responsavel));

        return parent::removeOrdenResponsavel($o_responsavel);
    }

    /**
     * {@inheritDoc}
     */
    public function getPacientes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPacientes', array());

        return parent::getPacientes();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndereco(\EntityBundle\Entity\Endereco $endereco = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndereco', array($endereco));

        return parent::setEndereco($endereco);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndereco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndereco', array());

        return parent::getEndereco();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}