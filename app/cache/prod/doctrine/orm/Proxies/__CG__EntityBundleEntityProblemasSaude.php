<?php

namespace Proxies\__CG__\EntityBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProblemasSaude extends \EntityBundle\Entity\ProblemasSaude implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'EntityBundle\\Entity\\ProblemasSaude' . "\0" . 'idProblemasSaude', '' . "\0" . 'EntityBundle\\Entity\\ProblemasSaude' . "\0" . 'nombrePsaude', '' . "\0" . 'EntityBundle\\Entity\\ProblemasSaude' . "\0" . 'pacienteProblemasSaude');
        }

        return array('__isInitialized__', '' . "\0" . 'EntityBundle\\Entity\\ProblemasSaude' . "\0" . 'idProblemasSaude', '' . "\0" . 'EntityBundle\\Entity\\ProblemasSaude' . "\0" . 'nombrePsaude', '' . "\0" . 'EntityBundle\\Entity\\ProblemasSaude' . "\0" . 'pacienteProblemasSaude');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProblemasSaude $proxy) {
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
    public function getIdProblemasSaude()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdProblemasSaude();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProblemasSaude', array());

        return parent::getIdProblemasSaude();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombrePsaude($nombrePsaude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombrePsaude', array($nombrePsaude));

        return parent::setNombrePsaude($nombrePsaude);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombrePsaude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombrePsaude', array());

        return parent::getNombrePsaude();
    }

    /**
     * {@inheritDoc}
     */
    public function getPacienteProblemasSaude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPacienteProblemasSaude', array());

        return parent::getPacienteProblemasSaude();
    }

    /**
     * {@inheritDoc}
     */
    public function addPacienteProblemasSaude(\EntityBundle\Entity\Paciente_ProblemasSaude $p_problemassaude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPacienteProblemasSaude', array($p_problemassaude));

        return parent::addPacienteProblemasSaude($p_problemassaude);
    }

    /**
     * {@inheritDoc}
     */
    public function removePacienteProblemasSaude(\EntityBundle\Entity\Paciente_ProblemasSaude $p_problemassaude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePacienteProblemasSaude', array($p_problemassaude));

        return parent::removePacienteProblemasSaude($p_problemassaude);
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
