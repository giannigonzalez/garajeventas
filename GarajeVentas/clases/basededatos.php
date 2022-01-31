<?php

class Basededatos{

    private $conexion;

    function __construct($servidor, $usuario, $clave, $base){

        $this->_connect($servidor, $usuario, $clave, $base);

    }

    function __destruct(){

        $this->conexion->close();

    }

    private function _connect($servidor, $usuario, $clave, $base){

        $this->conexion = new mysqli($servidor, $usuario, $clave, $base);

    }

    public function ejecutarQuery($query){

        $accion = strtoupper(substr($query, 0,6));

        switch($accion){

            case 'INSERT':
                $resultado = $this->conexion->query($query);
                break;
            case 'SELECT':
                $resultado = $this->conexion->query($query);
                $listar_datos = [];
                while($fila = $resultado->fetch_assoc()){
                    $listar_datos[] = $fila;
                }
                return $listar_datos;
                break;
            case 'UPDATE':
            case 'DELETE':
                $resultado = $this->conexion->query($query);
                break;
        }
    }
}