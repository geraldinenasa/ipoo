<?php

class Viaje{

    private $codigo;
    private $destino;
    private $maxima_pasajeros;
    private $pasajeros_viaje;
    
    //constructor
    
public function __construct($codigo,$destino,$maxima_pasajeros,$pasajeros_viaje){

    $this->codigo = $codigo;
    $this->destino = $destino;
    $this->maxima_pasajeros = $maxima_pasajeros;
    $this->pasajeros_viaje = $pasajeros_viaje;
    }
    
    // getter y setter

public function getCodigo(){
        return $this->codigo;       
    }
    
public function setCodigo($codigo){
        return $this->codigo = $codigo;
    }

public function getDestino(){
        return $this->destino;
    }

public function setDestino($destino){
        return $this->destino = $destino;
    }
    
public function getMaximaPasajeros(){
        return $this->maxima_pasajeros;
    }

public function setMaximaPasajeros($maxima_pasajeros){
        return $this->maxima_pasajeros = $maxima_pasajeros;
    }

public function getPasajerosViaje(){
        return $this->pasajeros_viaje;
    }

public function setPasajerosViaje($pasajeros_viaje){
        return $this->pasajeros_viaje = $pasajeros_viaje;
    }
}
