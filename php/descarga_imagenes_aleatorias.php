 <?php
 
  require('conexion.php');
     $jsondata = array();
     
     $sql = "SELECT * FROM TIO_IMAGENES";
     $result = $conn->query($sql);
     $rowcount = $result->num_rows;
     if($result->num_rows > 0)
     {
             //$row = $result->fetch_assoc();
	     $jsondata['imagenes'][] = array();
	     while($row = $result->fetch_array())
	     {	
             $jsondata['imagenes'][] = $row;  
     	     }
     }
     else
     {
             $jsondata['direccion_imagen'] = "0 results";
     }
            // Se obtiene la imagen con metaDatos GPS.
            /*$v_imagen = "imagenes/coche.jpg";
            
            // Generar thumbnail.
            $v_ancho_imagen = 200;
            $v_alto_imagen = 200;
            $v_tipo_imagen = 'jpg';
            $v_thumbnail = exif_thumbnail($v_imagen, $v_ancho_imagen, $v_alto_imagen, $v_tipo_imagen);
            
            $v_exif = exif_read_data($v_imagen);
            $v_longitud = getGps($v_exif["GPSLongitude"], $v_exif['GPSLongitudeRef']);
            $v_latitud = getGps($v_exif["GPSLatitude"], $v_exif['GPSLatitudeRef']);
            
            $jsondata['latitud'] = "La latitud de la imagen es: " . $v_latitud;
            $jsondata['longitud'] = "La longitud de la imagen es: " . $v_longitud;

            */
            function getGps($exifCoord, $hemi){
                $degrees = count($exifCoord) > 0 ? gps2Num($exifCoord[0]) : 0;
                $minutes = count($exifCoord) > 1 ? gps2Num($exifCoord[1]) : 0;
                $seconds = count($exifCoord) > 2 ? gps2Num($exifCoord[2]) : 0;

                $flip = ($hemi == 'W' or $hemi == 'S') ? -1 : 1;
                return $flip * ($degrees + $minutes / 60 + $seconds / 3600);
            }

            function gps2Num($coordPart) {
                $parts = explode('/', $coordPart);
                if(count($parts) <= 0){
                    return 0;
                }
                if (count($parts) == 1){
                    return $parts[0];
                }                
                return floatval($parts[0]) / floatval($parts[1]);
            }
    
    $jsondata['error'] = error_get_last();
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata, JSON_FORCE_OBJECT);
?>
