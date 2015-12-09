<?php

require('conexion.php');

$jsondata = array();

        $sql = "SELECT COUNT(user) as users from TIO_usuarios";

        $result = $conn->query($sql);
        $num_rows = $result->num_rows;
        $row = $result->fetch_assoc();

        if($result->num_rows > 0)
        {
       		$jsondata['resultado'] = $row['users']; 
	}
        else
        {
                $jsondata['numero_filas'] = 0;
        }

$jsondata['error'] = error_get_last();
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata, JSON_FORCE_OBJECT);

?>                                                                                                                       52,1        Fi
