<?php

session_start();

if(isset($_SESSION['user']) == false)
{
        header("location:inicio_sesion/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Myphoto</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

 <script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a style="margin-top:15px;" class="navbar-brand" href="#home">Bienvenido <?php echo $_SESSION['user'];?></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#works">Home</a></li>
		 <li ><a href="#comunidad_myphoto">Acerca de Myphoto</a></li>
		 <!--li ><a href="#contact">Subir imagen</a></li-->
                 <li >
  			<a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    			<i class="fa fa-user fa-2x"></i>
    			<span class="caret"></span>
  			</a>
  			<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    				<li><a href="#">Mis fotos</a></li>
    				<li><a href="#contact">Subir imagen</a></li>
  				<li><a href="#editar_perfil">Editar mi perfil</a></li>
                                <li id="#salir"><a href="">Salir</a></li>
  			</ul>
		</li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->
<!-- works -->
<div id="works"  class=" clearfix grid"> 
    <!--figure id="" class="effect-oscar  wowload fadeIn">
        <img id="" src="images/portfolio/3.jpg" alt="No puede encontrarse la imagen"/>
        <figcaption>
            <h2 id="etiqueta">Paisaje</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="" title="1" data-gallery>View more</a>
            <a href="#about" id="imagen1" title="">Info foto</a>          
            </p>  
        </figcaption>
    </figure-->
     <!--figure class="effect-oscar  wowload fadeInUp">
        <img id="" src="images/portfolio/3.jpg">
        <figcaption>
            <h2>Events</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/3.jpg" title="1" data-gallery>View more</a>            
            <a href="#about" id="imagen2" title="">Info foto</a>         
	    </p>
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img id="" src="images/portfolio/3.jpg" alt="img01"/>
        <figcaption>
            <h2>music</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/3.jpg" title="1" data-gallery>View more</a>            
            <a href="#about" id="imagen3" title="">Info foto</a>
	    </p>
	</figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img id="" src="images/portfolio/4.jpg" alt="img01"/>
        <figcaption>
            <h2>Vintage</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/4.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img  id="" src="images/portfolio/5.jpg" alt="img01"/>
        <figcaption>
            <h2>Typers</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/5.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/6.jpg" alt="img01"/>
        <figcaption>
            <h2>hotel</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/6.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/7.jpg" alt="img01"/>
        <figcaption>
            <h2>Chinese</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/7.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/8.jpg" alt="img01"/>
        <figcaption>
            <h2>Dicrap</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/8.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/9.jpg" alt="img01"/>
        <figcaption>
            <h2>Coffee</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/9.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/10.jpg" alt="img01"/>
        <figcaption>
            <h2>cameras</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/10.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/11.jpg" alt="img01"/>
        <figcaption>
            <h2>design</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/11.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/12.jpg" alt="img01"/>
        <figcaption>
            <h2>studio</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/12.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure-->
     
</div>
<!-- works -->
<div id="works"  class=" clearfix grid">
		
</div>


<!-- Cirlce Starts -->
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Detalles de foto</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class=""></i> Localización</h4>
    <!--p>Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs, lead by passionate and uber progressive team that lives and breathes design. Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs.</p>
    -->
<div id="googleMap" style="width:500px;height:380px;"></div><!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.84073994104!2d-16.319266349811603!3d28.48434249743822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc41cdb935b0bc59%3A0x651a798abdce1bbb!2sAv.+Trinidad%2C+San+Crist%C3%B3bal+de+La+Laguna%2C+Santa+Cruz+de+Tenerife!5e0!3m2!1ses!2ses!4v1449316167632" width="480" height = "350" frameborder="0" style="border:0" allowfullscreen></iframe>
-->
  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4 id="titulo"><i class=""></i>Una noche en París </h4>
  <p id="descripcion_imagen">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>    
 <table id="detalles_foto" class="table table-bordered table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>Detalles:</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Titulo imagen:</td>
                                    <td id="titulo_imagen"></td>
                                </tr>
                                <tr>
                                    <td>Lugar imagen:</td>
                                    <td id="lugar_imagen"></td>
                                </tr>
                                <tr>
                                    <td>Latitud imagen:</td>
                                    <td id="latitud_imagen"></td>
                                </tr>
                                <tr>
                                    <td>Longitud imagen:</td>
                                    <td id="longitud_imagen"></td>
                                </tr>
				<tr>
				     <td>Autor imagen:</td>
				     <td id="autor_imagen"></td>
				</tr>
				<tr>
				     <td>Tipo de imagen:</td>
			             <td id="tipo_imagen"></td>
				</tr>
				<tr>
				     <td>Nombre del archivo:</td>
				     <td id="nombre_imagen"></td>
				</tr>
				<tr>
				     <td>Tamaño de la imagen:</td>
				     <td id="tam_imagen"></td>
				</tr>
				<tr>
				     <td>Fecha:</td>
				     <td id="fecha_imagen"></td>
				</tr>
				<tr>
				     <td>Dispositivo:</td>
				     <td id="dispositivo_imagen"></td>
				</tr>
				
                            </tbody>
         </table>
  </div>
  </div>
<div id="comunidad_myphoto" class="spacer">
  <div class="process">
  <h3 class="text-center wowload fadeInUp">Process</h3>
  <ul class="row text-center list-inline  wowload bounceInUp">
      <li>
            <span><i class="fa fa-history"></i><b>Research</b></span>
        </li>
        <li>
            <span><i class="fa fa-puzzle-piece"></i><b>Plan</b></span>
        </li>
        <li>
            <span><i class="fa fa-database"></i><b>Develop</b></span>
        </li>
        <li>
            <span><i class="fa fa-magic"></i><b>Integration</b></span>
        </li>        
        <li>
            <span><i class="fa fa-cloud-upload"></i><b>Deliver</b></span>
        </li>
    </ul>
  </div>
</div>
</div>
<!-- #Cirlce Ends -->
<!-- About Starts -->
<div class="highlight-info" style="margin-top:-40px;">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">

  <div class="col-sm-4 col-xs-6">
  <i class="fa fa-smile-o  fa-5x"></i><h4 id="numero_cliente"OB></h4>
  </div>
  <div class="col-sm-4 col-xs-6">
  <i class="fa fa-camera  fa-5x"></i><h4 id="numero_fotos"></h4>
  </div>
  <div class="col-sm-4 col-xs-6">
  <!--Numero de fotos con geolocalización-->
  <i class="fa fa-map-marker fa-5x"></i><h4 id="numero_loc"></h4>
  </div>
</div>
</div>
</div>
</div>
<!-- About Ends -->

<!--Contact Ends-->
<div id="contact" class="spacer">

<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">Sube una imagen a Myphoto</h2>
  <div class="row wowload fadeInLeftBig">
      <div class="col-sm-12 col-xs-12">
      	<div class="col-sm-5 col-sm-offset-1 col-xs-12">
        
		<input id="title" type ="text" placeholder="Titulo imagen">
        	
		<input  id="author" type="text" placeholder="Autor de la imagen">

        	<textarea id="description" rows="5" placeholder="Descripción"></textarea>
        <!--button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button-->
      	</div>
      	<div class="col-sm-5 col-sm-offset-1 col-xs-12">
                <form>
		<input style="border:0px;" type="file" name="archivoImage" id="archivoImage">
		<!--input type="file" style="border:0px;" placeholder="Seleccionar la imagen"-->
		</form>
		<div id="imagen_a_subir"></div>
		<a href="" class="pull-right" style="display:none;">Añadir más imagenes</a>
      	</div>
   </div>
   <div class="col-sm-12 col-xs-12">	
        <div class="col-sm-5 col-sm-offset-1">
		<button id="subir_imagen" class="btn btn-primary pull-left"><i class="fa fa-paper-plane"></i> Subir!</button>
   	</div>
   </div>
  </div>



</div>
</div>

<!--Editar el perfil-->
<!--Contact Ends-->
<div id="editar_perfil" class="spacer">

<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">Editar mi perfil</h2>
  <div class="row wowload fadeInLeftBig">
      <div class="col-sm-12 col-xs-12">
        <div class="col-sm-5 col-sm-offset-1 col-xs-12">
                                        <form role="form">
                                      
                                                <label for="nombre">Nombre:</label>
                                                <input type="text" id="nombre_perfil" placeholder="">
                                      
                                                <label for="apellidos">Apellidos:</label>
                                                <input type="text"  id="apellidos_perfil" placeholder="">
                                                
                                                <label for="usuario">Usuario:</label>
                                                <input type="text" id="user_perfil" placeholder="">
                                                
						<label for="password">Password:</label>
                                                <input type="password" id="password_perfil" placeholder="">
                                                
						<label for="apellidos">Confirmar password:</label>
                                                <input type="password" id="confirmar_password_perfil" placeholder="">
                                                
						<label for="email">Email:</label>
                                                <input type="text" style="color-border:grey;"  id="email_perfil" placeholder="">
					</form>
        </div>
        <div class="col-sm-5 col-sm-offset-1 col-xs-12">
                <textarea  style="margin-top:3px;" id="descripcion_perfil" rows="5" placeholder="Descripción"></textarea>
	</div>
   </div>
   <div class="col-sm-12 col-xs-12">
        <div class="col-sm-5 col-sm-offset-1">
		<div id="mensaje_actualizar_perfil"></div>
                <button id="actualizar_perfil" class="btn btn-primary pull-left"><i class="fa fa-paper-plane"></i> Guardar!</button>
        </div>
   </div>
  </div>



</div>
</div>


<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX">
	<a href="http://www.facebook.com" target="blank"><i class="fa fa-facebook fa-2x"></i></a>
	<a href="http://www.instagram.com" target="blank"><i class="fa fa-instagram fa-2x"></i></a>
	<a href="http://www.twitter.com" target="blank"><i class="fa fa-twitter fa-2x"></i></a> 
	<a href="http://www.flickr.com" target="blank"><i class="fa fa-flickr fa-2x"></i></a> </p>
Copyright 2015 Myphoto. All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#works" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>
