<?php
	include_once('db/database_utilities.php');
	if(isset($_POST['idempleado']) && isset($_POST['nombre_empleado']) && isset($_POST['idcarrera_tutor'])){
	add_tutor($_POST['idempleado'],$_POST['nombre_empleado'],$_POST['idcarrera_tutor']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tutor</title>
</head>
<body>
	<form action="add_tutor.php" method="POST">
		<label>No. de Empleado:</label>
		<input type="text" name="idempleado" placeholder="No. Empleado"><br>
		<label>Nombre:</label>
		<input type="text" name="nombre_empleado"><br>
		<label>Carrera:</label>
		<select name="idcarrera_tutor">
			<option value="1">ITI</option>
			<option value="2">MECA</option>
			<option value="3">MANU</option>
			<option value="4">ISA</option>
			<option value="5">PYMES</option>
		</select>
		<br>
		<input type="submit" name="Enviar">
	</form>


</body>
</html>