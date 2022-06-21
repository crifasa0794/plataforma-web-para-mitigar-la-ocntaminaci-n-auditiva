<?php
    class conexion{
        private $conexion;
        private $resultado;
        
        function __construct(){
            $host = "localhost";
            $bd = "aula";
            $rol = "cristian";
            $pass = "1234";
            $puerto = "5432";
            $this->conexion = pg_connect("host=$host dbname=$bd user=$rol password=$pass port=$puerto");
        }
        function consulta($sql){
            $this->resultado = pg_query($this->conexion, $sql);
        }
        function extraerRegistros(){
            if($fila = pg_fetch_array($this->resultado)){
                return $fila;
            }else{
                return false;
            }
        }
        function cuentaFilas(){
            return pg_num_rows($this->resultado);
        }
        function filasAfectadas(){
            if(pg_affected_rows($this->resultado)){
                return true;
            }else{
                return false;
            }
        }
    }
?>