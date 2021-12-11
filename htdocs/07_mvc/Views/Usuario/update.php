<p>Bienvenido al update usuario..!</p>

<form action='usuario_controller.php' method='post'>
	<input type='hidden' name='action' value='update'>
	<table>
		<input type='hidden' name='id' value='<?php echo $usuario->id; ?>'>
		<tr>
			<td><label>Clave:</label></td><td><input type='text' name='clave' value='<?php echo $usuario->clave; ?>'></td>
		</tr>
		<tr>
			<td><label>Nombre:</label></td><td><input type='text' name='nombre'  value='<?php echo $usuario->nombre; ?>'></td>
		</tr>
		<tr>
			<td><label>Email:</label></td><td><input type='text' name='email' value='<?php echo $usuario->email; ?>'></td>
		</tr>
	</table>
		
	<input type='submit' value='Actualizar'>
</form>