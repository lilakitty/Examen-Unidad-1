<?php
	include_once('db/database_utilities.php');
	if(isset($_POST['matricula']) && isset($_POST['idcarrera_alumno']) && isset($_POST['nombre']) && isset($_POST['idtutor'])){
	add_alumno($_POST['matricula'],$_POST['idcarrera_alumno'],$_POST['nombre'],$_POST['idtutor']);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Alumno</title>
</head>
<body>
	<form action="add_alumno.php" method="POST">
		<label>Matricula</label>
		<input type="text" name="matricula" placeholder="matricula"><br>
		<label>Carrera:</label>
		<select name="idcarrera_alumno">
			<option value="1">ITI</option>
			<option value="2">MECA</option>
			<option value="3">MANU</option>
			<option value="4">ISA</option>
			<option value="5">PYMES</option>
		</select>
		<br>
		<label>Nombre:</label>
		<input type="text" name="nombre" placeholder="nombre"><br>
		<label>Tutor</label>
		<select name="idtutor">
			<option value="1">Tutor1</option>
			<option value="2">Tutor2</option>
			<option value="3">Tutor3</option>
		</select>
		<br>
		<input type="submit" name="Enviar">
	</form>
</body>
</html>