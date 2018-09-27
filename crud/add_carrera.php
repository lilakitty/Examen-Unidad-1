<?php
	include_once('db/database_utilities.php');
	if(isset($_POST['nombre_carrera'])){
	add_carrera($_POST['nombre_carrera']); 
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Carrera</title>
</head>
<body>
	<form action="add_carrera.php" method="POST">
		<label>Nombre de la carrera:</label>
		<input type="text" name="nombre_carrera"><br>
		<input type="submit" name="Enviar">
	</form>
</body>
</html>