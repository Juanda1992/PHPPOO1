<?php
    class Facebook{
        //En este pagina vamos a aplicar los modificadores de acceso tales como:
        // Public, private y protected

        //Atributos
        public $nombre;
        public $edad;
        private $pass; //contraseña

        //Metodos

        public function __construct($nombre,$edad,$pass){
            $this->nombre= $nombre;
            $this->edad= $edad;
            $this->pass = $pass;
        }

        public function verInformacion(){
            echo " Nombre: " . $this->nombre . "<br>";
            echo " Edad: " . $this->edad . "<br>";
            self::cambiarPass("4646");
            echo " Password: " . $this->pass . "" ;
        }
        
        private function cambiarPass($pass){
            $this->pass= $pass;
        }

    }
    //creamos el objeto llamado facebook
    $facebook = new Facebook("Juan David", 28, "4545");
    $facebook->verInformacion();




?>