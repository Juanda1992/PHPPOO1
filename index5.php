<?php 
    class Vehiculo{
        //En este ejercicio practicaremos las herencias 
        //Atributos
        public $motor = false;
        public $marca;
        public $color; 

        //Medotodos
        public function estado(){
            if($this->motor){
                echo"El motor esta encendido <br>";
            }else{
                echo"El motor esta apagado <br>";
            }
        }

        public function encender(){
            if($this->motor){
                echo "Cuidado el motor ya esta encendido <br>";
            }else{
                echo "El motor ahora esta encendido <br>";
                $this->motor = true;
            }
        }   
    }

    //Con la palabra reservada extends podemos heradar la clase Vehiculo
    class Moto extends Vehiculo{

    }

    class Cuatrimoto extends Moto{

    }
    
    $moto = new Cuatrimoto();
    $moto->estado();


    // $moto = new Moto();
    // $moto->estado();


    // $vehiculo = new Vehiculo();
    // $vehiculo->estado();
    // $vehiculo->encender();
    // $vehiculo->estado();



?>