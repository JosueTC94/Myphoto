$(document).ready(function()
{
var latitud;
var longitud;
var myCenter;
var output;
var id_imagen = 69;

$.ajax({
url: "php/descarga_inicial.php"
})
.done(function(data,textStatus,jqXHR)
{
$("#numero_cliente").html(data.numero_cliente);
$("#numero_fotos").html(data.numero_fotos);
$("#numero_loc").html(data.numero_loc);
//Descarga inicial de fotografias	

$.each(data.imagenes,function(key,value)
{
//	alert("Entro");
	output += "<figure class=effect-oscar  wowload fadeIn><img src="+value.direccion_imagen+" alt=No puede encontrarse la imagen/><figcaption><h2 id=etiqueta>Paisaje</h2><p>Lily likes to play with crayons and pencils<br><a  href="+value.direccion_imagen+" title="+value.titulo_imagen+" data-gallery>View more</a><a id="+value.id_imagen+" href=#about>Info foto</a></p></figcaption></figure>";
})
$("#works").html(output);

//Perfil
$("#user_perfil").val(data.user_perfil);
$("#nombre_perfil").val(data.nombre_perfil);
$("#apellidos_perfil").val(data.apellidos_perfil);
$("#email_perfil").val(data.email_perfil);
$("#password_perfil").val(data.password_perfil);
$("#descripcion_perfil").val(data.descripcion_perfil);

//Mapa
      /*          latitud = 51.508742;
                longitud = -0.120850;
                //mostrar_mapa();
//              myCenter=new google.maps.LatLng(51.508742,-0.120850);
                myCenter=new google.maps.LatLng(latitud,longitud);

                //alert(myCenter);
                google.maps.event.addDomListener(window, 'load', initialize());
//for(id_maspqueño;id_maximo)
*/
for(i=data.id_minimo;i<=data.id_maximo;i++)
{
        $("#"+i).click(function()
        {
                //alert("he pulsado el "+i);
                alert("Caracteristicas de la imagen:"+this.id);
		var id_imagen = this.id;
	//Mapa
	//	crear_mapa(latitud,longitud);
        $.ajax({
		data: "id_imagen="+id_imagen,
		type: "POST",
		url: "php/descarga_imagenes.php"
	})
	.done(function(data,textStatus,jqXHR){
		alert("entre");
		$("#titulo_imagen").html(data.titulo_imagen);
		$("#autor_imagen").html(data.autor_imagen);
		$("#latitud_imagen").html(data.latitud_imagen);
		$("#longitud_imagen").html(data.longitud_imagen);
		$("#descripcion_imagen").html(data.descripcion_imagen);
		$("#lugar_imagen").html(data.lugar_imagen);
                latitud = data.latitud_imagen;
                longitud = data.longitud_imagen;
                myCenter=new google.maps.LatLng(latitud,longitud);

                google.maps.event.addDomListener(window, 'load', initialize());

	})
	.fail(function(jqXHR,textStatus,errorThrown)
	{
		alert("no entre");

	});
	});
}

})
.fail(function(jqXHR,textStatus,errorThrown)
{
alert("fail");
});


$("#imagen1").click(function()
{
	alert("data->"+this.id);
});
for(i=1;i<=103;i++)
{
	$("#"+i).click(function()
	{
		alert("he pulsado el "+i);
		alert("Caracteristicas de la imagen:"+this.id);
	});
}
$("#salir").click(function()
{
	$.ajax({
	   url: "php/logout.php"
	})
	.done(function(data,textStatus,jqXHR)
	{
            setTimeout(function(){location.href="inicio_sesion/index.php";},500);
	})
	.fail(function(jqXHR,textStatus,errorThrown)
	{

	});
});



$("#archivoImage").change(function()
{
        var inputFileImage = document.getElementById("archivoImage");
        var file = inputFileImage.files[0];
        var data = new FormData();
        data.append('archivo',file);

	$("#imagen_a_subir").html("<img src="+file+" width=150px height=150px></img>");
});

$("#subir_imagen").click(function(event)
{
	event.preventDefault();
	var titulo_imagen = $("#titulo_imagen").val();
	var autor_imagen = $("#autor_imagen").val();
	var detalles_imagen = $("#detalles_imagen").val();	
	var imagen_subir;

        var inputFileImage = document.getElementById("archivoImage");
        var file = inputFileImage.files[0];
        var data = new FormData();
        data.append('archivo',file);
        var url = "php/subir_imagen.php";
        $.ajax(
            {
                url:url,
                type:"POST",
                contentType: false,
                data: data,
                processData: false,
                cache: false
            })
            .done(function(data,textStatus,jqXHR)
            {
                alert("Entre en el done");
                //alert("Data-success:"+data.conexion);
                //alert("Data-archivo:"+data.nombre_archivo);
               // alert("Tipo-archivo"+data.tipo_archivo);
               //    alert("Tmp-archivo:"+data.tmp_archivo);
                //alert("Archivador:"+data.archivador);
                //alert("Data-success:"+data.success);
                //alert("Error:"+data.error);
               // alert("Id_imagen:"+data.id_imagen);
                id_imagen = data.id_imagen;
		//alert("mov->"+data.mov);
		alert("Latitud->"+data.latitud);
                alert("V_imagen->"+data.v_imagen);
		//Actualizamos los campos autor,titulo y detalles de la imagen introducida
		alert("prueba->"+$("#title").val());
		
		var titulo_imagen = $("#title").val();
		var autor_imagen = $("#author").val();
		var detalles_imagen = $("#description").val();
		var parametros_imagen_subida = "id_imagen="+id_imagen+"&titulo_imagen="+titulo_imagen+"&autor_imagen="+autor_imagen+"&detalles_imagen="+detalles_imagen;	
		alert(parametros_imagen_subida);
        	$.ajax({
                	data: parametros_imagen_subida,
                	type: "POST",
                	url: "php/subir_imagen1.php"
        	})
        	.done(function(data,textStatus,jqXHR)
        	{
                	alert("Data->"+data.success);
                	$("#mensaje_respuesta_subida").html(data.respuesta);
		})
        	.fail(function(jqXHR,textStatus,errorThrown)
        	{
                	alert("Fail cnweio");
        	        $("#mensaje_respuesta_subida").html(data.respuesta);
	        });

	    })
            .fail(function(jqXHR,textStatus,errorThrown)
            {
               alert("Entre en el fail");
            });	
       
});

$("#actualizar_perfil").click(function()
{
       var parametros_perfil = "user="+$("#usuario_perfil").val()+"&apellidos_registro="+$("#apellidos_perfil").val()+"&nombre_perfil="+$("#nombre_perfil").val()+"&password_perfil="+$("#password_perfil").val()+"&email_perfil="+$("#email_perfil").val()+"&detalles_perfil="+$("#descripcion_perfil").val();
       alert(parametros_perfil);
       $.ajax({
           data: parametros_perfil,
           type: "POST",
           url: "php/actualizar_perfil.php"
       })
       .done(function(data,textStatus,jqXHR)
       {
		$("#mensaje_actualizar_perfil").html("<h4>"+data.success+"</h4>");
       })
       .fail(function(jqXHR,textStatus,errorThrown)
	{
		alert("No funciona ni pa atras");
	});
});

function initialize()
{
//alert("entre");
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

//myCenter=new google.maps.LatLng(51.508742,-0.120850);
//google.maps.event.addDomListener(window, 'load', initialize);


});
