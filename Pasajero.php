<?php

class Pasajero{

    private $nombre;
    private $apellido;
    private $dni;
    
    //constructor
    
public function __construct($nombre,$apellido,$dni){

    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->dni = $dni;
    }
    
    // getter y setter

public function getNombre(){
        return $this->nombre;       
    }
    
public function setNombre($nombre){
        return $this->nombre = $nombre;
    }

public function getApellido(){
        return $this->apellido;
    }

public function setApellido($apellido){
        return $this->apellido = $apellido;
    }
    
public function getDni(){
        return $this->dni;
    }

public function setDni($dni){
        return $this->dni = $dni;
    }
}
