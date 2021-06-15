<?php
    function autoload($clase){
        include "clases/" .  $clase . ".php";
    }
    spl_autoload_register('autoload');

    Auto::mostrar("Hola mundo");    
    Persona::mostrar("Hello bit**"); 
?>