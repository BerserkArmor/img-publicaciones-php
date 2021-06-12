
<?php

    require "./conexion.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/vanillatoasts.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;600&display=swap" rel="stylesheet"> 

    <title>Pulicaciones</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient ">
  <div class="container-fluid text-center justify-content-center">
    <a class="navbar-brand " href="index.php">Administrador de publicaciones</a>
 
  </div>
</nav>

    <div class="content pt-5 ">
        <label for="img" class="button"></label>
    </div>
    
    <div class="container">
    <div class="row">
        <div class="col-lg-4 m-auto">
        <div class="card d-none mt-4 " id="vist_Previa">
        <div class="card-header  bg-gradient bg-danger text-light fw-bolder ">
            <p class="card-title">Crear Publicacion</p>
        </div>
        <div class="card-body image">
          <form method="post" action="" id="frmImg">
            <input type="file" name="imagen" id="img">
            <img src="" alt="" id="img_Previa" class="img-thumbnail ">
            <div class="form-group mt-3">
                <label for="comentario ">Comentario</label>
                <textarea id="comentario" class="form-control" name="comentario" rows="3"></textarea>
            </div>
            <button class="btn btn-sm btn-primary mt-2" type="button" id="btn-publicar">Publicar</button>
          </form>
        </div>
        </div> 
        
        </div>
    </div>
    </div>
    
    <div class="container mb-5 mt-5">
        <h4 class="text-center text-light fs-2">Publicaciones</h4>
        <div class="row" id="resultado" >

        
        </div>
    </div>


    <script src="./js/vanillatoasts.js"></script>
    <script src="./js/script.js"></script>

</body>
</html>