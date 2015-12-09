<?php

require('conexion.php');

$jsondata = array();
session_start();

	
	$usu = $_POST['usuario'];
	$pass = $_POST['password'];	
	$jsondata['usu'] = $usu;
	$jsondata['pass'] = $pass;
	//$usu = "josuetc94";
	//$pass = "x";

	$sql = "SELECT * from TIO_usuarios where password_usuario='$pass' AND user='$usu'";

	$result = $conn->query($sql);
	$num_rows = $result->num_rows;
        $row = $result->fetch_assoc();

	if($result->num_rows > 0)
	{
		$jsondata['numero_filas'] = $num_rows;
		$jsondata['ID_usuario'] = $row['ID_usuario'];
		$jsondata['nombre_usuario'] = $row['nombre_usuario'];
		$jsondata['apellidos_usuario'] = $row['apellidos_usuario'];
		$jsondata['correo_usuario'] = $row['correo_usuario'];
		$jsondata['user'] = $row['user'];
		$jsondata['detalles'] = $row['detalles'];
		$jsondata['numero_filas'] = $num_rows;
		$_SESSION['ID_usuario'] = $row['ID_usuario'];
		$_SESSION['nombre_usuario'] = $row['nombre_usuario'];
		$_SESSION['apellidos_usuario'] = $row['apellidos_usuario'];
		$_SESSION['correo_usuario'] = $row['correo_usuario'];
		$_SESSION['user'] = $row['user'];
		$_SESSION['detalles'] = $row['detalles'];
		
		$jsondata['respuesta'] = "El usuario es correcto";
		//$jsondata['prueba_session']=$_SESSION['ID_usuario'];
	}
	else
	{
		$jsondata['numero_filas'] = 0;
		$jsondata['respuesta'] = "El usuario no existe";
	}

$jsondata['error'] = error_get_last();	
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata, JSON_FORCE_OBJECT);

?>
