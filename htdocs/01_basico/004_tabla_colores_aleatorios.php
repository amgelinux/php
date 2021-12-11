<?php
$num_filas = 255;
echo "<table border=1>";
for ($i=0;$i<$num_filas;$i++) {
?>
<tr style="background-color: rgb(<?= random_int(0,$num_filas); ?>, <?= random_int(0,$num_filas); ?>, <?= random_int(0,$num_filas); ?>")>
<?php
echo "<td>&nbsp;&nbsp;&nbsp;$i&nbsp;&nbsp;&nbsp;</td>";
echo "<td>&nbsp;&nbsp;&nbsp;$i&nbsp;&nbsp;&nbsp;</td>";
echo "</tr>";
}
?>
