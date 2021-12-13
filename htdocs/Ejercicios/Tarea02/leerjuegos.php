<?php
// Ejemplo de https://www.jose-aguilar.com/blog/leer-archivo-linea-linea-con-php/

$tiempo_inicial = microtime(true);
$numlinea=0;
$archivo = fopen('wiitdb.txt','r');
?>
<table border="1">
    <tr>
        <td>Codigo</td>
        <td>Nombre</td>
    </tr>
<?php
while ($linea = fgets($archivo)) {
    $trozos = explode(" = ", $linea);
    if (count($trozos)>1) {
        $codigo = $trozos[0];
        $nombre = $trozos[1];
        echo "<tr><td>$codigo</td><td>$nombre</td></tr>";
        $numlinea++;
    }
}

fclose($archivo);
?>
</table>
<?php
echo "Se han escrito $numlinea juegos";
echo "<br>";
$tiempo_final = microtime(true);
$tiempo_empleado = $tiempo_final - $tiempo_inicial;
echo "Se ha tardado $tiempo_empleado";
?>
