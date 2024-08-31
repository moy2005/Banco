<?php
    class BDConecction{
        private $coneccion;      
        public function __construct(){
            require_once('App/Config/config.php');
            $this->coneccion = new mysqli(BD_HOST,BD_USER,BD_PASSWORD,BD_NAME);
            if($this->coneccion->connect_error){
                die('Error al conectar con la base de datos Descripcion : '. $this->coneccion->connect_error);
            }
        }
        public function abrirConeccion(){
            return $this->coneccion;
        }
        public function cerrarConeccion(){
            $this->coneccion->close();
        }
    }
?>