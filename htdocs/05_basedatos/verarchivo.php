<?php
// Muestra un archivo de la base de datos que se obtiene mediante su id.
//
//
//
$bdhost="localhost";
$bd = "mvc";
$bdusuario ="root";
$bdpass="toor";
$bdtabla ="imagenes";
$id = $_GET["id"];

try {
    $mbd = new PDO("mysql:host=$bdhost;dbname=$bd", $bdusuario, $bdpass, [PDO::FETCH_ASSOC]);
    $filas = $mbd->query("SELECT * from $bdtabla WHERE id = $id");
    foreach ($filas as $fila) {
        $datosfichero = stripslashes($fila["datos"]);
        $tipofichero = $fila["tipo"];
        header("Content-type: $tipofichero");
        echo $datosfichero;
//        echo $tipofichero;
//        echo $fila["nombre"];
        exit();
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}



