<?php
# @uthor armando_rdz, at 08/04/20
/**
 * Listado de las consolas en cards de bootstrap
 */
require 'db/Database.php';
$db = new Database;
$connection = $db->connect();

$sqlC = "SELECT * FROM accesorios";
$resultC = mysqli_query($connection, $sqlC);

while ($row = mysqli_fetch_row($resultC)) { // por cada fila itera

    #$sqlP = "SELECT id, nombre, cobro, fecha_lanzamiento FROM consolas";
    #$resultP = mysqli_query($connection, $sqlP);
    #$resultP = mysqli_fetch_row($resultP);
    ?>

    <div class="col-xl-3 col-md-6 mb-4" style="margin-right: 100px;">
        <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="img/accesorio.png" alt="Card image cap"
                 style="height: 40%; width: 40%; margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto; padding-top: 10%;">
            <div class="card-body" style="text-align: center">
                <h5 class="card-title"><?php echo $row[1] ?></h5>
                <!--<p class="card-text" style="text-align: center"><strong><?php echo $row[2] ?></strong></p>-->
            </div>
            <ul class="list-group list-group-flush" style="text-align: center">
                <li class="list-group-item">$<?php echo $row[2] ?> <small>/ hora de juego</small></li>
                <li class="list-group-item">Lanzamiento: <strong><?php echo $row[3] ?></strong></li>
            </ul>
        </div>
    </div>


    <?php
} // termina el ciclo

?>
