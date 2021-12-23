<html>
 <head>
        <?php include ("../bootstrap/bootstrap_cabecera.inc"); ?>
    </head>
    <body>
    <div class="container-fluid pt-5 mx-auto">
<?php
include "ClaseJuego.php";
$matrizjuegos[] = null;
$xml=simplexml_load_file("wiitdb.xml") or die("Error: Cannot create object");
// echo count($xml->game);
// echo "<br><br>";
// print_r($xml->game[0]);
// echo "<br><br>";
$num = 0;
foreach ($xml->game as $juego) {
//    echo "<br>" . $num++;

    $matrizjuegos[] = new Juego($juego->id,
                                $juego['name']
    );
}
// print_r($matrizjuegos[1]);

for ($i=1; $i<200; $i++) {
?>
<div class="card" style="witdh: 200px">
    <img class=" car-img-top" src="leerzip.php?id=<?= $matrizjuegos[$i]->getId(); ?>" style="width: 100px">
    <div class="card-body">
        <h4 class="card-title"><?= $matrizjuegos[$i]->getId(); ?></h4>
        <p class="card-text"><?= $matrizjuegos[$i]->getNombre(); ?></p>
    </div>
</div>

<?php
}

?>
    </div>
    </body>
    </html>
