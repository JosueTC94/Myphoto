<?php

require('conexion.php');

$jsondata = array();
session_start();

        $id_imagen = $_POST['id_imagen'];
	$titulo_imagen = $_POST['titulo_imagen'];
	$autor_imagen = $_POST['autor_imagen'];
	$detalles_foto = $_POST['detalles_imagen'];

         $sql = "UPDATE TIO_IMAGENES set titulo_imagen = '$titulo_imagen',autor_imagen = '$autor_imagen',descripcion_imagen = '$detalles_foto' WHERE id_imagen = $id_imagen";

    $jsondata['probando']= $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        $jsondata['success'] = "Su foto ha sido subida correctamente";
    } else {
        $jsondata['success'] = "Error en la carga" . $conn->error;
    }

$jsondata['error'] = error_get_last();
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata, JSON_FORCE_OBJECT);

?>

