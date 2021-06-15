<?php
    // Las clases abstractas obligan a la clase que los extiende usar obligatoriamente
    // los metodos asignados en ella
    
    abstract class Molde{

        abstract public function ingresarNombre($nombre);
        abstract public function obtenerNombre();

    }

    class Persona extends Molde{

        private $mensaje ="Hello ma people";
        private $nombre;

        public function mostrar(){
            print $this->mensaje;
        }

        public function ingresarNombre($nombre){
            $this->nombre= $nombre;

        }

        public function obtenerNombre(){
            print $this->nombre;
        }
    }

    $obj = new Persona();
    $obj->mostrar();


?>