<?php
    function conexion(){
        $server="localhost";
        $user="root";
        $pass="";
        $bd="postprincipal";
        $conn=mysqli_connect($server,$user,$pass,$bd) or die("Error en la conexion ");
        $conn->set_charset("utf8");
        return $conn;
    }
?>