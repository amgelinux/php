<?php
    $numfilas = 20;
    $fila = 0;
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
<table class="table">
    <thead>
        <tr>
            <th>Elemento 1</th>
            <th>Elemento 2</th>
            <th>Elemento 3</th>
        </tr>
    </thead>
    <tbody>
    
<?php 
while ($fila < $numfilas) {
if (($fila % 2) == 0)
{
?>
        <tr style='background-color: rgb(255,0,0)';>
<?php 
} 
else 
{ 
?>
        <tr style='background-color: rgb(0,255,0)';>
<?php
}
?>
        <td scope="row">x</td>
            <td>x</td>
            <td>x</td>
        </tr>
<?php
$fila++;
}
?>
    </tbody>
</table>
</body>
</html>