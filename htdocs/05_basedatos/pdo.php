<a href="https://diego.com.es/tutorial-de-pdo">https://diego.com.es/tutorial-de-pdo</a>
<br>
<?php

$bdhost="localhost";
$bd = "mvc";
$bdusuario ="root";
$bdpass="toor";
$bdtabla ="usuarios";

// Con un el método PDO::setAttribute
try {
    $dsn = "mysql:host=$bdhost;dbname=$bd";
    $dbh = new PDO($dsn, $bdusuario, $bdpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo $e->getMessage();
}

// Se trabajaría de forma similar para UPDATE y DELETE
$stmt = $dbh->prepare("INSERT INTO $bdtabla (clave, nombre, email) VALUES (:clave, :nombre, :email)");
// Bind
$nombre = "usuario" . (string)random_int(210,250);
$clave = "mipass1";
$email = "angelmartinez@iescastelar.com";
// En el siguiente ejemplo hashearemos la clave, ahora no
$stmt->bindParam(':clave', $clave);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':email', $email);

// Excecute, un echo devuelve 1 porque afectamos una fila
echo "Hemos afectado a " . $stmt->execute() . " filas ==>>><br>";

echo "Plantilla SQL: ";
echo $stmt->queryString;
$dbh = null;

echo "<br><br><b>Resultado:</b><BR><BR>";

try {
    $mbd = new PDO("mysql:host=$bdhost;dbname=$bd", $bdusuario, $bdpass, [PDO::FETCH_ASSOC]);
    foreach ($mbd->query("SELECT * from $bdtabla") as $fila) {
        print_r($fila);
        echo "<br />";
        echo "El nombre de usuario es: " .$fila["nombre"] . "<br>";
        echo "<br />";
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

