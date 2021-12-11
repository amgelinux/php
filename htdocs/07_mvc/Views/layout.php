<html>
<head>
	<title>Bienvenido MVC </title>
</head>
<body>
	<table style="border-style: dashed; border-width: 1px; border-color: chartreuse;">
		<tr>			
			<td><a href="?controller=usuario&action=register">Ingresar Usuarios</a></td>
			<td><a href="?controller=usuario&action=index">Ver Usuarios</a></td>
		</tr>
	</table>
	<?php require_once('routes.php'); ?>
</body>
</html>