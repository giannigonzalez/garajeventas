<?php

class Productos{
    
    private $bd;

    function __construct($base){
        
        $this->bd=$base;

    }

    public function seleccionarProductos(){

        $respuesta = $this->bd->ejecutarQuery("SELECT * FROM productos");
        return $respuesta;

    }

    public function insertarProductos($nombre_vendedor,$contacto,$producto,$descripcion,$precio){
        
        $respuesta = $this->bd->ejecutarQuery("INSERT INTO productos (nombre_vendedor,contacto,producto,descripcion,precio) VALUES('$nombre_vendedor','$contacto','$producto','$descripcion','$precio')");
        return $respuesta;

    }

}
?>