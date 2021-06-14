<?php

    class Pagina{

        // En este ejemplo solo se puede acceder  a los atributos estaticos
        //por medio de los metodos estaticos con el operador self::

        //Atributos
        public $nombre = "Juanda Profile";
        public static $url = "https://www.facebook.com/crazy.vip.c4/";

        //Metodos
        public function bienvenida(){
            echo "Bienvenidos a  <b>" . $this->nombre  ."</b> la pagina es <b>". Pagina::url   . "</b> <br>";
        }
        
        public static function bienvenida2(){
            echo "Bienvenidos a " . $this->nombre; 
            echo "La pagina es " . self::url;

        }
    }

    $pagina = new Pagina();
    $pagina->bienvenida();
    
    //LOS METODOS ESTATICOS NO PUEDEN ACCEDER A ATRIBUTOS DE LA CLASE
    Pagina::bienvenida2();


?>