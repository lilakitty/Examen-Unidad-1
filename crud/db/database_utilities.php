<?php

	$host = 'mysql:dbname=db;host=localhost;';
	$user = 'root';
	$pass = '';

	$pdo = new PDO($host,$user,$pass);

	function add_alumno($matricula,$idcarrera_alumno,$nombre,$idtutor){
		global $pdo;
		$stmt=$pdo->prepare("INSERT INTO alumno(matricula,idcarrera_alumno,nombre,idtutor) VALUES('$matricula','$idcarrera_alumno','$nombre','$idtutor')");
		return $stmt->execute();


	}

	function add_tutor($idempleado,$nombre_empleado,$idcarrera_tutor){
		global $pdo;
		$stmt=$pdo->prepare("INSERT INTO tutor(idempleado,nombre_empleado,idcarrera_tutor) VALUES('$idempleado','$nombre_empleado','$idcarrera_tutor')");
		return $stmt->execute();

	}

	function add_carrera($nombre_carrera){
		global $pdo;
		$stmt=$pdo->prepare("INSERT INTO carrera(nombre_carrera) VALUES('$nombre_carrera')");
		return $stmt->execute();

	}


?>