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
    
    <?php
    if(!$_GET){
        header('Location: ./main.php?pagina=1');
    }
    ?>

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
      
      <div id="busqueda">
        Busqueda:
      <input type="text" name="noMoto" id="input" placeholder="Nombre de una moto">
      </div>

      <div id="selMarca">
        Selecciona una marca:
        <select class="selMain">
          <option value="0">-Marca</option>
          <option value="1">Gas Gas</option>
          <option value="2">Honda</option>
          <option value="3">Yamaha</option>
          <option value="4">Suzuki</option>
          <option value="5">Ktm</option>
          <option value="6">Husqvarna</option>
          <option value="7">Kawasaki</option>
          <option value="8">BMW</option>
          <option value="9">Ducati</option>
          <option value="10">Sherco</option>
        </select>
      </div>

      <div id="selModa">
        Selecciona una modalidad:
        <select class="selMain">
          <option value="0">-Modalidad</option>
          <option value="1">Scooter</option>
          <option value="2">Naked</option>
          <option value="3">Sport</option>
          <option value="4">Super Sport</option>
          <option value="5">Trial</option>
          <option value="6">Motocross</option>
        </select>
      </div>

    </div>


    <div id="galeria">
      
    </div>
        
    <div class="pagination">
<!--        <a href="">&laquo;</a>
        <a href="./main.php?pagina=1">1</a>
        <a href="./main.php?pagina=2">2</a>
        <a href="./main.php?pagina=3">3</a>
        <a href="">&raquo;</a>-->
    </div>

    </div>
  </div>

  <script>
    
    
    $(document).ready(function() {
        
        $.urlParam = function(name){
            var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            return results[1] || 0;
        }  
        
        function paginacion() {
                
            $pagina = $.urlParam('pagina');
        
        $.ajax({
          method  : "GET",
          url     : "../CONTROLLER/controladorPaginacion.php",
          dataType: "json",
          success : function(data) {
        
                for(i=1; i<=data; i++) {
                    if (i == $pagina) {
                       $(".pagination").append("<a class=\"selPag\" href=\"./main.php?pagina="+i+"\">"+i+"</a>"); 
                    } else {
                        $(".pagination").append("<a href=\"./main.php?pagina="+i+"\">"+i+"</a>");
                    }
                }
            }   
        });
    }  
        

      function getMotos() {
          
        $pagina = $.urlParam('pagina');
        $url = "../CONTROLLER/controladorGaleria.php";
        
        $url = $url + "?pagina=" + $pagina;
        
        $.ajax({
          method  : "GET",
          url     : $url,
          dataType: "json",
          success : function(data) {

            data.forEach(function(moto) {
                $("#galeria").append(
                
                  "<div class=\"gallery\">"
                  + "<a href = \"visualizarProducto.php?ID=" + moto.ID_PROD + "\">"
                  + "<img src =" + moto.IMG_PRO + ">"
                  + "</a> <div>"
                  + "<class='\"desc\">" + moto.NOM_PRO + "</div> </div>");
            });
          }
        });
      }

      $(document).ready(function () { 
        getMotos();
        paginacion();
      });

    }) ;

  </script>
</body>
</html>