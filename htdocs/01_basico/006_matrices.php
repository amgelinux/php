<?php
$matriz1 = [];
$matriz2 = array("foo", "bar", "hello", "world");
$matriz3 = ["foo", "bar", "hello", "world"];
$matriz4 = ["alumno1" => "fabian", "alumno2" => "andrea"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $matriz1[] = "fabian";
    $matriz1[] = "andrea";
    $matriz1[] = "samuel";
    $matriz1[] = "luis";

    echo $matriz1[2] . " " . $matriz4["alumno2"];
    echo "<br>";
    var_dump($matriz2);
foreach ($matriz1 as $item) {
    echo $item;
    }
?>    
</body>
</html>