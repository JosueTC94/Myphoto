$(document).ready(function()
{    
//Inicio de sesión
    var parametros_login;
    var usu;
    var pass;
    $("#login").click(function(event)
    {
        event.preventDefault();
        alert("click en login");
        usu=$("#user").val();
        alert(usu);
        pass=$("#pass").val();
        alert(pass);
        parametros_login = "usuario="+usu+"&password="+pass;        
        
        $.ajax({
            data: parametros_login,
            type: "POST",
            url: "php/login.php"
        })
        .done(function(data,textStatus,jqXHR)
        {
            alert("Entre en el done");
            alert("Data->"+data.numero_filas);
            alert("Id_usuario->"+data.ID_usuario);
            alert("Usu->"+data.usu);
            alert("pass->"+data.pass);
            $("#mensaje_respuesta").html("<h3>"+data.respuesta+"</h3>");
            setTimeout(function(){location.href="index1.php";},500);
            //Actualizo la variable sesion

        })
        .fail(function(jqXHR,textStatus,errorThrown)
        {
           alert("Entre en el fail"); 
        if (jqXHR.status === 0) {
              alert('Not connected.\nPlease verify your network connection.');
        }else if (jqXHR.status == 404) {
              alert('The requested page not found. [404]');
        }else if (jqXHR.status == 500) {
              alert('Internal Server Error [500].');
        }else if (jqXHR === 'parsererror') {
              alert('Requested JSON parse failed.');
        }else if (jqXHR === 'timeout') {
              alert('Time out error.');
        }else if (jqXHR === 'abort') {
              alert('Ajax request aborted.');
        }else{
              alert('Uncaught Error.\n' + jqXHR.responseText);
        }	
        });     
    });
    $("#registro").click(function(event)
    {
       event.preventDefault();
       var parametros_registro = "user="+$("#registro_user").val()+"&pass="+$("#registro_pass").val()+"&nombre_completo="+$("#registro_nombre").val();    
       alert(parametros_registro);
       alert("Ha seleccionado registrarse");
       $.ajax({
           data: parametros_registro,
           type: "POST",
           url: "php/registro.php"
       })
       .done(function(data,textStatus,jqXHR)
       {
          alert("Done"); 
          alert("Data->"+data.success);
       })
       .fail(function(jqXHR,textStatus,errorThrown)
       {
           alert("Fail");
       });
    });
    
       $("#user").focusin(function(){
          $(".inputUserIcon").css("color", "#e74c3c");
        }).focusout(function(){
          $(".inputUserIcon").css("color", "white");
        });
        
        $("#pass").focusin(function(){
          $(".inputPassIcon").css("color", "#e74c3c");
        }).focusout(function(){
          $(".inputPassIcon").css("color", "white");
        });
    
});//Fin del código
