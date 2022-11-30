<?php
    function conectar()
    {
        $host  = "localhost";
        $usuario = "root";
        $password = "";
        $baseDatos = "theshopdb";
        $conn = new mysqli($host, $usuario, $password, $baseDatos);
        return $conn;
    }
?>