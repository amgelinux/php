<?php
// Arrancamos la sesión y vemos que los valores se mantienen hasta que se ejecutan los comandos de destrucción de sesión.

session_start();

echo $_SESSION["nombre"];
echo "<br/>";
echo session_id();
echo "<br/>";
session_unset();
session_destroy();

echo "ID SESION DESPUES BORRAR:" . session_id();
echo "<br/>";
echo $_SESSION["nombre"];

echo "<hr/>";

// Tenemos otras variables superglobales que se pueden ver en el phpinfo()
echo $_SERVER["HTTP_USER_AGENT"];

?>