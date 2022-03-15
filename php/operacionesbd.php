<?php
    class OperacionesBD{
        public function __construct(){
            require 'configdb.php';
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
        function sacarFila(){
            return $this->resultado->fetch_array();
        }
        function filaAsociativa(){
            return $this->resultado->fetch_assoc();
        }
        public function ultimoInsert_id(){
            return $this->conexion->insert_id;
        }
    
    }