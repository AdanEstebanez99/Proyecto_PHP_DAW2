<?php
    if(!$_GET){
        header('Location: ./index.php?status=0');
    }
?>

<!DOCTYPE html>
<html>
  <head>
	  <meta charset="utf-8">
	  
    <title>~ The MotorBike Home ~</title>

    <!--Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">  

    <link href="./VIEW/recursos/imagenes/favicon.ico" rel="shortcut icon"/>
    <link href="./VIEW/recursos/estiloIndex.css" rel="stylesheet"/>

</head>
<body>
  <div class="contenedor">
    
    <div id="titulo">
      Bienvenido a </br>The MotorBike Home!
    </div>

    <div id="menu">
      <div class="formIni">
        <form class="inicioSes" action="./MODEL/login.php">
          <strong class="ISES">Inicio de sesión:</strong>
          </br>
          </br>
          Usuario:
          </br>
          <input type="text" name="usuario" class="inp" placeholder="Nick de Usuario">
          </br>
          </br>
          Contraseña:
          </br>
          <input type="password" name="contrasena" class="inp" placeholder="Contraseña">
          </br>
          </br>
          <button class="boton"><strong>Entrar</strong></button>
        </form>
      </div>
      

      <div class="enRegistro">
        Si no estas registrado todavia <a href="./VIEW/formularioRegistro.php" class="enlaces"><strong>registrate</strong></a></br> cuanto antes!
      </div>

      <div id="mensaje">
        <?php
            $comprobacion = $_GET['status'];
            if ($comprobacion == "1") {
                echo "Usuario o contraseña incorrectos";
            } else {
                echo "";
            }
        ?>
      </div>

    </div>
  
  </div>
	

</body>
</html>