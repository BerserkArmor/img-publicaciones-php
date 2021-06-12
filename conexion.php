<?php
    $servidor = "mysql:dbname=fetch;host=localhost";
    $user= "root";
    $pass = "";

    try {
        $pdo = new PDO($servidor, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
    } catch (PDOException $ex) {
        echo "Error en la conexion.php: ". $ex->getMessage();
    }


?>