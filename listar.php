<?php

    require "./conexion.php";
    
    $sql = "SELECT * FROM url ORDER BY id DESC";
    $query = $pdo->prepare($sql);

    $query->execute();

    if($query->rowCount() > 0){
        $resultado   = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($resultado as $row){
    
            echo '<div class="col-md-4 mt-3">
                <div class="card border-0">
                    <div class="card-header  bg-gradient bg-danger text-light  fw-bolder ">
                       <strong class="pt-5"> Publicado: '.time_ago(strtotime($row['fecha'])).'</strong>
                        <button  class="btn bg-transparent ms-5 fs-5 float-end"><i class="fas fa-ban"></i></button>
                    </div>
                    <div class="card-body image bg-dark bg-gradient">
                    <img class="rounded  border-0 " src="img/'.$row['url'].'" alt="imagen">
    
                    </div>
                    <div class="card-footer  bg-dark text-light fw-light">
                        Comentario: '.$row['comentario'].'
                    </div>
                </div>
                </div>';
    
    
        }

    }else{
        echo "<div class='alert alert-info mt-5' role='alert'> No hay publicaciones recientes...😵‍💫</div>";
    }










    





    function time_ago($fecha){

        $diferencia = time() - $fecha;

        if($diferencia<  1){
            return 'justo ahora';

        }

        $condicion = array(
            12 * 30 * 24 * 60 * 60 => 'año',
            30 * 24 * 60 * 60 => 'mes',
            24 * 60 * 60 => 'dia',
            60 * 60 => 'hora',
            60 => 'minuto',
            1 => 'segundo'


        );

        foreach($condicion as $secs => $str){
            $d = $diferencia / $secs;
            if($d >=1){
                $t = round($d);
                return 'hace '.$t. ' '.$str. ( $t >1 ? 's' : '');
            } 
        }

    };

?>

