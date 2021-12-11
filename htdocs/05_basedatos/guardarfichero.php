<?php
if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {

    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $imgContenido = addslashes(file_get_contents($fileTmpPath));

    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
}

$bdhost="localhost";
$bd = "mvc";
$bdusuario ="root";
$bdpass="toor";
$bdtabla ="imagenes";

// Con un el método PDO::setAttribute
try {
    $dsn = "mysql:host=$bdhost;dbname=$bd";
    $dbh = new PDO($dsn, $bdusuario, $bdpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo $e->getMessage();
}

// Se trabajaría de forma similar para UPDATE y DELETE
$stmt = $dbh->prepare("INSERT INTO $bdtabla (datos, creado, tipo, extension, nombre) VALUES (:datos, :creado, :tipo, :extension, :nombre)");
// Bind
setlocale(LC_TIME,"es_ES");
$date = new DateTime();
$fecha = $date->format('Y-m-d H:i:s');

$stmt->bindParam(':datos', $imgContenido);
$stmt->bindParam(':creado', $fecha);
$stmt->bindParam(':tipo', $fileType);
$stmt->bindParam(':nombre', $fileName);
$stmt->bindParam(':extension', $fileExtension);

// Excecute, un echo devuelve 1
$stmt->execute();
$dbh = null;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
El fichero se guardó en la base de datos
</body>
</html>
