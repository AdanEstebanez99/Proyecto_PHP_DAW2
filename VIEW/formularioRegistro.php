<!DOCTYPE html>
<html>
  <head>
	  <meta charset="utf-8">
	  
    <title>~ The MotorBike Home ~</title>

    <!--Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">  

    <link href="./recursos/imagenes/favicon.ico" rel="shortcut icon"/>
    <link href="./recursos/estilo.css" rel="stylesheet"/>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>
<body>
  <div id="opacity">

    <div id="fondo">

    <div id="banner">
      The MotorBike Home
    </div>

    <div id="cabecera">
    </div>

    <div id="mensaje">
      

    </div>

    <div id="formuRegistro">
      <h1> Formulario de Registro </h1>

      <form id="rUsuario" class="registroUsu">
        <div class="campos">
        </br>
        Introduce tu Nombre:
        </br>
        <input type="text" name="nombre" placeholder="Nombre" required="required" maxlength="50" id="nombreUsr">
        </br>
        </br>
        Introduce tus Apellidos:
        </br>
        <input type="text" name="apellidos" placeholder="Apellidos" required="required" maxlength="50" id="apeUsr">
        </br>
        </br>
        Introduce una Contraseña:
        </br>
        <input type="password" name="contrasena" required="required" placeholder="Menos de 12 caracteres" maxlength="12" id="conUsr">
        </br>
        </br>
        Correo Electronico:
        </br>
        <input type="text" name="email" placeholder="ejemplo@gmail.com" required="required" maxlength="50" id="mailUsr">
        </br>
        </br>
        Nombre de Usuario:
        </br>
        <input type="text" name="nick" placeholder="Nick de Usuario" required="required" maxlength="25" id="nickUsr">
        </br>
        </br>
        </div>
          
        <div id="botonRegistro">
            <button id="envioForm" class="btnReg"><strong>Enviar Formulario</strong></button>
        </div>

        
      </form>
        
    </div>

    </div>
  </div>



<script>
    
        function getMensaje() {
    
            var form = document.getElementById('rUsuario');
         
        if (form.checkValidity()) { 
 
            $.ajax({
            method  : "POST",
            url     : "../CONTROLLER/controladorRegistro.php",
            dataType: "json",
            data: { 
                "nombre": $('#nombreUsr').prop('value'),
                "apellidos": $('#apeUsr').prop('value'),
                "contrasena": $('#conUsr').prop('value'),
                "email": $('#mailUsr').prop('value'),
                "nick": $('#nickUsr').prop('value')
            },
            success : function(data) {
              
                if (!data) {
                    $("#mensaje").html("Nombre de usuario ya registrado, intentelo de nuevo.");
                    $(window).scrollTop(0);
                    console.log(data);
                } else {
                    console.log("true");
                    window.location.href = "../index.php";
                  
                }
            }
            });
        
        } else {
            $("#mensaje").html("Los datos introducidos no son correctos, reviselos.");
            $(window).scrollTop(0);
        }
    }
    
    
    
    $(document).ready(function() {

        
    }) ;
    
    
    $("button").on('click', function(e){
        e.preventDefault();
        getMensaje();
    });
    
    

  </script>


</body>
</html>