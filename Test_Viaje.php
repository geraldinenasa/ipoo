<?php

include "Viaje.php";
include "Pasajero.php";

/* Muestra en pantalla el menu al usuario
    
    @return int $opcion */
    
    function menu(){
		
		echo "-----------Menu---------\n";
		echo "1- Ingresar pasajero. \n";
		echo "2- Modificar. \n";
		echo "3- Mostrar. \n";
		echo "0- Salir. \n";
		echo "-----------Menu---------\n";
		
		echo "Ingrese una opcion: ";
		$opcion = (int) trim(fgets(STDIN));
		
		return $opcion;
	}
	
/* Realiza la carga de los valores de un pasajero
@return obj $pasajero */
		
    function ingresaPasajero(){
		echo "\n Ingrese la cantidad maxima de pasajeros: ";
		$maxima_pasajeros = (int) trim(fgets(STDIN));
		$lista = []; // $lista = array();
		//Recorrido
		for ($i=1;$i<=$maxima_pasajeros;$i++){
		echo "Ingrese nombre: ";
		$nombre = strtoupper(trim(fgets(STDIN)));
		echo "Ingrese apellido: ";
		$apellido = strtoupper(trim(fgets(STDIN)));
		echo "Ingrese DNI: ";
		$dni = strtoupper(trim(fgets(STDIN)));
        $pasajero[$i] = new Pasajero($nombre,$apellido,$dni); // Nuevo objeto pasajero
        array_push($lista,$pasajero);
	}
		return $lista;
 }
 
 /*Muestra los datos cargados
 @return obj $salida*/
 
     function  mostrarDatos (){
     $lista = getPasajero();
        //for ($i=1;$i<=count($this->pasajero);$i++){
			   //$salida = "|".$this->pasajero[$i]['Nombre']."|".$this->pasajero[$i]['apellido']."|".$this->pasajero[$i]['documento']."\n";
     foreach ($lista as $pasajero) {
		 echo "Nombre: ".$pasajero->getNombre();
		 echo "Apellido: ".$pasajero->getApellido();
		 echo "DNI: ".$pasajero->getDni();
        }   
       return $lista;
 }
 /*Funcion para modificar los pasajeros*/
 
  function modificar_pasajero(){
  
           
      
  }
 
//programa principal	
    
    do{
		$opcion = menu();
		$band = "S";
	    switch ($opcion){
	    
	    case '0':
	    
	        echo "Fin del programa! \n";  
	        break;
	        	
		case '1': 
						
			if($band == "S"){

				do {
					 $ingresarPasajero = ingresaPasajero ();
				     print_r ($ingresarPasajero);
			
					echo "Quiere agregar otro pasajero ? (S/N): ";
					$band = strtoupper(trim(fgets(STDIN)));

				} while ((count($ingresarPasajero)<=$maxima_pasajeros) && ($band == "S"));
				echo "\n No se admiten mas pasajeros \n";
			}
			
			break;
		 
		 case '2':
		      
		      echo "\n Ingrese el pasajero a modificar: ";
		      $modificar_pasajero = trim(fgets(STDIN));
		      
		 break;
		 
		 case '3':
				 mostrarDatos ();
		 break;
		 
		 default : echo "\n Ingrese una opcion correcta \n";
		} 
      } while ($opcion != 0 );
   
 ?> 
