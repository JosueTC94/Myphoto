<?php

session_start();

if(isset($_SESSION['user']) == true)
{
        header("location:index1.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Seccion de Logueo</title>
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom CSS -->
        <link href="../css/4-col-portfolio.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/home.js"></script>

    <style>
        @import url(http://weloveiconfonts.com/api/?family=entypo);
        @import url(http://fonts.googleapis.com/css?family=Roboto);
        
        /* zocial */
        [class*="entypo-"]:before {
          font-family: 'entypo', sans-serif;
        }
        
        *,*:before,*:after {
          -moz-box-sizing: border-box;
          -webkit-box-sizing: border-box;
          box-sizing: border-box; 
        }
        h2 {
          color:rgba(255,255,255,.8);
          margin-left:12px;
        }
        body {
          background: #272125;
          font-family: 'Roboto', sans-serif;
        }
        form {
          position:relative;
          margin: 50px auto;
          width: 380px;
          height: auto;
        }
        input {
          padding: 16px;
          border-radius:7px;
          border:0px;
          background: rgba(255,255,255,.2);
          display: block;
          margin: 15px;
          width: 300px;  
          color:white;
          font-size:18px;
          height: 54px;
        }
        input:focus {
          outline-color: rgba(0,0,0,0);
          background: rgba(255,255,255,.95);
          color: #e74c3c;
        }
        button {
          float:right;
          height: 121px;
          width: 50px;
          border: 0px;
          background: #e74c3c;
          border-radius:7px;
          padding: 10px;
          color:white;
          font-size:22px;
        }
        #registro
        {
          float:right;
          height: 121px;
          width: 50px;
          border: 0px;
          background: green;
          border-radius:7px;
          padding: 10px;
          color:white;
          font-size:22px;
        }
        .inputUserIcon {
          position:absolute;
          top:68px;
          right: 80px;
          color:white;
        }
        .inputPassIcon {
          position:absolute;
          top:136px;
          right: 80px;
          color:white;
        }
        input::-webkit-input-placeholder {
          color: white;
        }
        input:focus::-webkit-input-placeholder {
          color: #e74c3c;
        }
    </style>
    <script type="text/javascript">
 
    </script>        
    </head>
    <!--body background="imagenes/paisaje.jpg"-->
    <body>
    <div class="col-md-12" id="form_login">
      <form action="">
        <h2><span class="entypo-login"></span> Login </h2>
        <button class="submit" id="login"><span class="entypo-lock"></span></button>

        <span class="entypo-user inputUserIcon"></span>
        <input type="text" id="user" placeholder="ursername"/>
        <span class="entypo-key inputPassIcon"></span>
        <input type="password" id="pass"placeholder="password"/>
        <div id="mensaje_respuesta"></div>
      </form>
    </div>
		<div id="form_registro" class="col-md-12">
					<form style="margin-top:1px"><!--class="form-inline signup"-->
            <h2><span class="entypo-login"></span> Registro </h2>
            <button class="submit" id="registro"><span class="entypo-lock"></span></button>
            <span class="entypo-user inputUserIcon"></span>
            <input type="text" id="registro_user" placeholder="ursername"/>
            <span class="entypo-user inputUserIcon"></span>
            <input type="text" id="registro_nombre" placeholder="nombre completo"/>              
            <span class="entypo-user inputUserIcon"></span>
            <input type="password" id="registro_pass" placeholder="Password"/>
           </form>
				</div>
</body>
</html>
