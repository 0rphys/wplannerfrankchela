<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;


class Usuario extends Entity
{
    private $nombres = null;
    private $apellidos = null;
    private $usuario = null;
    private $cedula = 0; 
    

    function __construct(){

    }

    
    /**
     * Get the value of nombres
     */ 
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set the value of nombres
     *
     * @return  self
     */ 
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get the value of apellidos
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of cedula
     */ 
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set the value of cedula
     *
     * @return  self
     */ 
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }
}