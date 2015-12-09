<?php

require('conexion.php');

$jsondata = array();

        $sql = "SELECT COUNT(distinct id_imagen) as photos from TIO_IMAGENES";

        $result = $conn->query($sql);
        $num_rows = $result->num_rows;
        $row = $result->fetch_assoc();

        if($result->num_rows > 0)
        {
                $jsondata['resultado'] = $row['photos'];
        }
        else
        {
                $jsondata['numero_filas'] = 0;
        }

$jsondata['error'] = error_get_last();
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata, JSON_FORCE_OBJECT);

?>          
