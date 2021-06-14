<?php
    class Persona{
        // En este vemos una declaracion de variables y metodos utilizando un ciclo for,
        // utilizamos arreglos, y creamos objetos
        
        //Atributos
        public $nombre = array();
        public $apellido = array();

        //Metodos

        public function guardar($nombre, $apellido){
            $this->nombre[] =$nombre;
            $this->apellido[]=$apellido;
        }

        public function mostrar(){
            for($i= 0; $i < count($this->nombre); $i++){
                //self se utiliza para llamar un metodo es una de las 3 maneras que conozco
                // self:: this-> o nombre de la clase Persona
                self:: formato($this->nombre[$i], $this->apellido[$i]);
            }

        }

        public function formato($nombre,$apellido){
            echo " Nombre: ". $nombre . " Apellido: " . $apellido . "<br>";

        }
      
    }

    $persona= new Persona();
    $persona->guardar("Carlos","Fernandez");
    $persona->guardar("Pepito", "Ranz");
    $persona->mostrar();

?>