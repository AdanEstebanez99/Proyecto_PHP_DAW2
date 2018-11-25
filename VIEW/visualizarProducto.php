<?php
  session_start();
  if(!isset($_SESSION['usuario'])){

    header('location: ../index.php');

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

    <link href="./recursos/imagenes/favicon.ico" rel="shortcut icon"/>
    <link href="./recursos/estilo.css" rel="stylesheet"/>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>

<body data-usuario="<?php echo $_SESSION['usuario']?>">
  <div id="opacity">

    <div id="fondo">

    <div id="banner">
      The MotorBike Home
    </div>

    <div id="cabecera">
      <div id="infoUsuario">
          <div id="menUsuario">
            <?php
                echo ("Hola \"".$_SESSION['usuario']."\", Bienvendio.");
            ?>
          </div>
          <div id="motoFav">
              <button class="btnFav" onclick="window.location.href='./visualizarProductoFav.php'">Motos Favoritas</button>
          </div>
          <div id="marcaFav">
              <button class="btnFav">Marcas Favoritas</button>
          </div>
          <div id="modalidadFav">
              <button class="btnFav">Modalidades Favoritas</button>
          </div>
          <div id="cerrarSes">
              <a href="../MODEL/logout.php"><strong>Cerrar </br>sesión</strong></a>
          </div>
      </div>
    </div>

    <div id="nav">

    </div>


    <div id="galeria">
      
    </div>
        
        <div id="btnFav2">
            
        </div>

    </div>
  </div>

  <script>
    
    $(document).ready(function() {
        
        $.urlParam = function(name){
            var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            return results[1] || 0;
        }  

      function getMotos() {
          
          $ID = $.urlParam('ID');
          $url = "../CONTROLLER/controladorImagen.php";
          $url = $url + "?ID=" + $ID;

        $.ajax({
          method  : "GET",
          url     : $url,
          dataType: "json",
          success : function(data) {

            data.forEach(function(moto) {
                $("#galeria").append(
                  "<div class=\"motoSel\">"
                  + "<img src =" + moto.IMG_PRO + ">"
                  + "</a>"
                  + "<div class=\"desc\"></br>" + moto.NOM_PRO + "</div>\n\ "
                  + " \n\ <div class=\"marc\"></br> " + moto.NOM_MAR + " </div>\n\ "
                  + " \n\ <div class=\"moda\"></br> (" + moto.NOM_MOD + ") </div>\n\ "
                  + "</div>");
          
            });
          }
        });
      }
      
     
      function insFavorito() {
      
        $ID = $.urlParam('ID');
            $.ajax({
                method  : "POST",
                url     : "../CONTROLLER/controladorCreaFav.php",
                dataType: "json",
                data: { 
                    "ID": $ID,
                    "nom_usu": $("body").data("usuario")
                },
                success : function(data) {

                   compFavorito();

                }
                });
      }
      
      
      function compFavorito() {
      
        $ID = $.urlParam('ID');
            $.ajax({
                method  : "POST",
                url     : "../CONTROLLER/controladorEvaluarFav.php",
                dataType: "json",
                data: { 
                    "ID": $ID,
                    "nom_usu": $("body").data("usuario")
                },
                success : function(data) {

                    if (!data) {

                        $("#btnFav2").html("<button id=\"btnInsertarFav\">AÑADIR MOTO A FAVORITOS</button>");
                        console.log("NO DATA");
                        console.log(data);
                        $("#btnInsertarFav").on('click', function(e){
                            console.log("manejador insertar");
                             insFavorito();
                         });
                    } else {
                        $("#btnFav2").html("<button id=\"btnEliminarFav\">ELIMINAR MOTO DE FAVORITOS</button>");
                        console.log("DATA");
                        console.log(data);
                        $("#btnEliminarFav").on('click', function(e){
                            console.log("manejador eliminar");
                              eliminarFavorito();
                          });

                    }
                }
                });
      }
      
      
      
      function eliminarFavorito() {
      
        $ID = $.urlParam('ID');
            $.ajax({
                method  : "POST",
                url     : "../CONTROLLER/controladorEliminaFav.php",
                dataType: "json",
                data: { 
                    "ID": $ID,
                    "nom_usu": $("body").data("usuario")
                },
                success : function(data) {

                    compFavorito();
                }
                });
      }
      
      

      $(document).ready(function () {
          getMotos();
          compFavorito()
      });
    }) ;

  </script>
</body>
</html>