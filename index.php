<?php 
 // Se crea la clase persona,luego declaramos la variable publica $nombre
 //creamos la funcion hablar, luego creamos el objeto persona donde puede ser llamado los
 //atributos o metodos creados en la clase persona
class Persona{
    //Atributos
    public $nombre = "Juan";

    //Metodos
    public function hablar($mensaje){
        echo $mensaje;

    } 
}

$persona = new Persona();
//echo $persona->nombre;
$persona->hablar("Saludo de parte de JDO");





?>