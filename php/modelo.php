<?php
    class Modelo{
        function __construct()
        {
            require_once "operacionesbd.php";
            $this->operacion=new OperacionesBD();
        }
        function devolverId(){
            return $this->operacion->ultimoInsert_id();
        }
        function introducir($usuario){
            
            $consulta="INSERT INTO PEDIDOS(idUsuario)VALUES($usuario);";
            $this->operacion->consulta($consulta);
        }
        function sacarPedido(){
            $consulta=
            "
                SELECT idPedido, Fecha,usuarios.nombre
                FROM pedidos
                INNER JOIN usuarios
                ON pedidos.idUsuario = usuarios.idUsuario
            ";
            $this->operacion->consulta($consulta);
            $pedidos = array();
            while ($fila = $this->operacion->sacarFila()){
                array_push($pedidos,
                  [
                    "idPedido" => $fila["idPedido"],
                    "Fecha"=> $fila["Fecha"],
                    "nombre"=>$fila["nombre"]
                  ]
                );
              }
            return $pedidos;  
        }
    }
?>