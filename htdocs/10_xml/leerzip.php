<?php
$id = $_GET["id"];

$zp = zip_open('GameTDB-wii_cover-US-2021-12-08.zip');
$encontrado = false;
while ($file = zip_read($zp)) {
    $nombre = zip_entry_name($file);
//    if (str_contains($nombre, $id)) { // Necesita PHP 8
    if (strpos($nombre, $id) != false) {
        $tamanio = zip_entry_filesize($file);
        $contenido = zip_entry_read($file, $tamanio);
        header("Content-type: image/jpeg");
        echo $contenido;
    }
}
zip_close($zp);