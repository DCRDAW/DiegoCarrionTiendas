<?php
    require 'configdb.php';
    class OperacionesBD{
        private $conexion;
        public $resultado;
        public function __construct(){
            $this->conexion=new mysqli(HOSTNAME, USERNAME, PW, DB);
        }
        public function consulta($consulta){
            $this->resultado=$this->conexion->query($consulta);
        }
        public function error(){
            if($this->conexion->errno=='1062')
                return '<p>El campo introducido ya existe</p>';
            if($this->conexion->errno=='1406')
                return '<p>Uno de los campos introducidos supera el límite de caracteres</p>';
            return $this->conexion->errno.'--'.$this->conexion->error;
        }
       /* public function posicionArray($num){
            return $this->resultado->data_seek($num);
        }*/
        function sacarFila(){
            return $this->resultado->fetch_array();
        }
        function filaAsociativa(){
            return $this->resultado->fetch_assoc();
        }
        /*function id_anterior(){
            return $this->conexion->insert_id;
        }*/
        function preparar($consulta){
            return $this->conexion->prepare($consulta);
        }
    }