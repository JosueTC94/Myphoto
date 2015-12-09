<?php

require('conexion.php');

$jsondata = array();
session_start();

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$apellidos_registro = $_POST['apellidos_registro'];
	$nombre_registro = $_POST['nombre_registro'];
	$email_registro = $_POST['email_registro'];
	$descripcion = $_POST['detalles'];

    /*    $user = "Josue";
        $pass = "1";
        $apellidos_registro = "1";
        $nombre_registro = "1";
        $email_registro = "1";
        $descripcion = "1";
*/
	$sql = "INSERT INTO TIO_usuarios(user,nombre_usuario,password_usuario,apellidos_usuario,correo_usuario,detalles) VALUES('$user','$nombre_registro','$pass','$apellidos_registro','$email_registro','$descripcion')";
	$jsondata['conexion'] = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        $jsondata['success'] = "El usuario se ha registrado correctamente";
    } else {
        $jsondata['success'] = "El usuario no se ha podido registrar " . $conn->error;   
    }

        /*$sql1 = "SELECT ID_usuario from TIO_usuarios where user like JosueTC94";

    if ($conn->query($sql1) === TRUE) {
            $result1 = $conn->query($sql1);
     	    $num_rows1 = $result1->num_rows;
     	    $row1 = $result2->fetch_assoc(); 
	    $jsondata['id_usuario'] = $row['ID_usuario'];
    } else {
           $jsondata['id_usuario'] = -1;
    }*/


$jsondata['error'] = error_get_last();	
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata, JSON_FORCE_OBJECT);

?>
