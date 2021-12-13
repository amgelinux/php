<html>
<head>
    <?php include ("../../bootstrap/bootstrap_cabecera.inc"); ?>
</head>
<body>
<?php
// Ejemplo de https://www.jose-aguilar.com/blog/leer-archivo-linea-linea-con-php/

$tiempo_inicial = microtime(true);
$numlinea=0;
$archivo = fopen('wiitdb.txt','r');
?>
<div class="container">
    <div class="row">
<?php
while ($linea = fgets($archivo)) {
    $trozos = explode(" = ", $linea);
    if (count($trozos)>1) {
        $codigo = $trozos[0];
        $nombre = $trozos[1];

?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $codigo; ?></h5>
                <p class="card-text"><?php echo $nombre; ?></p>

            </div>
        </div>
<?php
        $numlinea++;
        if ($numlinea % 2 == 0) {
?>
    </div><div class="row">
<?php
        }

    }
}

fclose($archivo);
?>
</div>
<?php
echo "Se han escrito $numlinea juegos";
echo "<br>";
$tiempo_final = microtime(true);
$tiempo_empleado = $tiempo_final - $tiempo_inicial;
echo "Se ha tardado $tiempo_empleado";
?>
</body>
</html>