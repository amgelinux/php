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
<?php

function esPrimo($numero) {
    ($numero % 2 == 0)? $numerofin = $numero / 2: $numerofin = (($numero / 2) + 1);
    for ($i = 2; $i <= $numerofin; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

$numero = $_GET["numero"];

    print("El número $numero es divisible por los siguientes números primos:<br>");

for ($i = 1; $i <= ($numero); $i++) {
    if ($numero % $i == 0) {
        if (esPrimo($i)) {
            echo $i . "<br/>";
        };
    }
}

?>
</body>
</html>