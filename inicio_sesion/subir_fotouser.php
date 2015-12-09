<?php
require('conexion.php');
   $jsondata = array(); 
    //$ID_user = $_POST['id_user'];
    $ID_user = 1;
    $target_path = "images/";
    //$target_path = $target_path . basename( $_FILES['archivo']['name']); if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) { $jsondata['success'] = "El archivo ". basename( $_FILES['archivo']['name']). " ha sido subido";
    //} else{
     // $jsondata['error'] =  error_get_last();     
   //}

    //$archivador = "images/".$_FILES['archivo']['name'];
    $archivador = "images/";
    $query = "update TIO_usuarios set foto_user = '$archivador' where ID_usuario = $ID_user";

    if ($conn->query($query) === TRUE) {
           $jsondata['success'] = "El archivo se ha subido correctamente al servidor";
    } else {
        $jsondata['success'] = "Error al subir archivo: " . $conn->error;   
    }
 
    $jsondata['error'] = error_get_last();
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata, JSON_FORCE_OBJECT);
?>
