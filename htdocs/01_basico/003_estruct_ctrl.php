<html>
<head>
<title>Titulo</title>
</head>
<body bgcolor="#FF00FF">
Hola clase!!!!!

<?php
	echo "Hola DAM";
?>
<br />

<?php
	$a = "3a";
	$b='3a';
	echo $a . $b;
echo "<br/>";
	echo 2**3;
echo "<br/>";
	echo 7 % 3;
echo "<br/>";

$cadena1 = "sandra";
$cadena2 = "angel";
$$cadena1 = 44;
echo $sandra;

echo "<br>";

if ($a <> $b) {
	echo "$a y $b son distintos";
}
else
{
	echo '$a y $b son iguales';
}
?>
<table border=1>
<?php
for ($i=0; $i<256; $i++) {
echo "<tr><td>$i</td></tr>";
}
?>
</table>
</body>
</html>
