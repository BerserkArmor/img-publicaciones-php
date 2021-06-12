<?php

 if(isset($_POST)){

    require "./conexion.php";
    
    $img = $_FILES['imagen'];
    $nombre = $img['name'];
    $nombreTemp = $img['tmp_name'];
    $coment = $_POST['comentario'];
    $destino = "img/".$nombre;
    $query = $pdo->prepare("INSERT INTO url (url ,comentario) VALUES (:url, :coment)");
    $query->bindValue(":url", $nombre, PDO::PARAM_STR);
    $query->bindValue(":coment", $coment, PDO::PARAM_STR);
    $query->execute();
    if($query){
        move_uploaded_file($nombreTemp, $destino);
        echo "ok";

    }


}


?>