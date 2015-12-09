 <?php
 
  require('conexion.php');
     $jsondata = array();
     
     $id_imagen = $_POST['id_imagen'];

     $sql = "SELECT * FROM TIO_IMAGENES WHERE id_imagen = $id_imagen";
     $result = $conn->query($sql);
     if($result->num_rows > 0)
     {
             $row = $result->fetch_assoc();
             $jsondata['direccion_imagen'] = $row['direccion_imagen'];
             $jsondata['titulo_imagen'] = $row['titulo_imagen'];
	     $jsondata['lugar_imagen'] = $row['lugar_imagen'];
	     $jsondata['autor_imagen'] = $row['autor_imagen'];
             $jsondata['latitud_imagen'] = $row['latitud_imagen'];   
             $jsondata['longitud_imagen'] = $row['longitud_imagen'];   
             
	     $jsondata['altitud_imagen'] = $row['altitud_imagen'];   
	     $jsondata['descripcion_imagen'] = $row['descripcion_imagen'];
/*	     $exif = exif_read_data($jsondata['direccion_imagen'], 0, true);
             $v_imagen = $jsondata['direccion_imagen'];
            
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
