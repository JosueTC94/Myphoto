<?php

require('conexion.php');

$jsondata = array();

        $sql = "select count(id_imagen) as cuenta from TIO_IMAGENES where (latitud_imagen <> 0) AND (longitud_imagen <> 0)";

        $result = $conn->query($sql);
        $num_rows = $result->num_rows;
        $row = $result->fetch_assoc();

        if($result->num_rows > 0)
        {
                $jsondata['resultado'] = $row['cuenta'];
        }
        else
        {
                $jsondata['numero_filas'] = 0;
        }

$jsondata['error'] = error_get_last();
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata, JSON_FORCE_OBJECT);

?>          
