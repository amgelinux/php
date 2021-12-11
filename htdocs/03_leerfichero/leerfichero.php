<?php
$cadena="";
$archivo = "hola.txt";
// Abrimos el archivo
$fp = fopen($archivo, "r");
// Loop que parará al final del archivo, cuando feof sea true:
while(!feof($fp)){
    $cadena .= fread($fp, 1);
}

$letrasabuscar = "to";
echo "Contenido del fichero:<br><br><br>";
echo $cadena;
echo "<br><br><br>";
echo "<b>Analizando el texto:</b><br>";
echo "<br><br>En el anterior texto la/s letra/s <b>$letrasabuscar</b> aparece <b>". CuentaVeces($cadena, $letrasabuscar). "</b> veces.";

function CuentaVeces ($cadena, $letras) {
    $contador=0;
    while (($pos = strpos($cadena, $letras)) !== false) {
        $contador++;
        $cadena = substr($cadena, $pos+strlen($letras));
        echo $cadena . "<br>";
    }
    return $contador;
}