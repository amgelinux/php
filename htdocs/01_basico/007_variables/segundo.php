<?php 
session_start();
// session_start() antes de cualquier cosa que genere un envío de headers
if (!isset($_SESSION["nombre"])) {
    $_SESSION["nombre"] = $_GET["nombre"];
}
?>
<html>
    <body>
    <?php
// $_GET o $_REQUEST
    $propietario = $_SESSION["nombre"];
    $coches = $_REQUEST["cars"]; // $_REQUEST recoge $_POST y $_GET, no distingue
    echo $coches[1];
echo "<br>";


?>
<a href="tercero.php">click a otra pagina</a>
</body>
</html>