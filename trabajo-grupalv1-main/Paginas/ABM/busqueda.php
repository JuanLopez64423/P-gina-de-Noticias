<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mostrarNoticias.css">

<!--FONT AWESOME donde saque el icono de la lupa-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<!--FONT OSWALD fuente de Google Font-->
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
<!--CUSTOM CSS este sera mi css personalizado-->
<link rel="stylesheet" href="stylecs.css">
</head>
<body style="background-image: url('botones.jpg')">
<div class="go-top-container">
    <div class="go-top-button">
        <i class="fas fa-chevron-up"></i>
    </div>
</div>

<div class="container">
    <nav class="nav-main">
      <div class=logo>  
        <a href="/Paginas/1-index/index.html">
          <img src="/mediaindex/logonoticias (1).png" alt="Noticias Grupo 5 LOGO" class="nav-brand logo-rotation">
          </a>
        </div>       
             <ul class="nav-menu">
            <li>
                <a href="../4-lol/indexlol.html">League of Legends </a>
            </li>
            <li>
                <a href="/Paginas/2-cs/indexcs.html">Counter strike </a>
            </li>
            <li>
                <a href="/Paginas/8-valor/indexvalor.html">Valorant</a>
            </li>
            <li style="display:none;">
                <a href="/Paginas/6-rs/indexrs.html">Rocket league</a>
            </li>
            <li>
                <a href="/Paginas/5-mk/indexmk.html">Mortal kombat</a>
            </li>
            <li>
                <a href="/Paginas/3-fifa/indexfifa.html">Fifa</a>
            </li>
            <li>
            <a href="mostrarNoticias.php">Ver Mas Noticias</a>
            </li>
            </ul>
                <li>
                <a href="buscarJuego.html">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
            </ul>       
    </nav>
    <hr>

  


</div>



<?php
$noti_nombre=$_GET['noti_nombre'];
require "conexion.php";
$sql="select *from noticias where noti_nombre='$noti_nombre' order by noti_id desc;";
$resulset = mysqli_query($conn,$sql);
?>

<?php
while ($registro= mysqli_fetch_assoc($resulset)){
    
?>

<div  class="infoNoticiasSql">

            <div class="cuadradoDeDentro" style="display:inline;border:1px solid blue; width: 20%;
        height: 100%">
                <img style="height:100%;
        width: 100%;" src="<?php echo $registro['noti_imagenDeFondo1']; ?>" alt="">
            </div>


            <div class="infoGames" style="background-color: #54335e ; display:inline;border:1px solid white; width: 80%;
        height: 80%">
            


                            <p style=" display:inline;font-size:2vw; margin-left:1vw;" ><?php echo $registro['noti_nombre']; ?>:</p>
                            <p style="color:red; display:inline;font-size:1.8vw; " ><?php echo $registro['noti_descripcion']; ?></p>
                            <p style=" font-size:1.3vw; margin-left:1.3vw;" ><?php echo $registro['noti_historia']; ?></p>
            </div>



            <form style="align-self:flex-start;background-color: #2d2947 ;height:100%;" >
                <input style="display:none;"  type="number" name="noti_id" value="<?php echo $registro['noti_id']; ?>">
                <input style="position:relative; bottom:1vh;"type="submit" value="Eliminar" formaction="eliminar.php"  formmethod="get" onClick="return confirm('¿Estas seguro de eliminar esta noticia?' )">
                <input style="position:relative; bottom:1vh;" type="submit" value="Modificar" formaction="modificar.php"  formmethod="get">

        </form>

</div>







<?php

}
?>
<br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br>
<footer style="background-color:gray;" class="site-footer">
        <div class="container">
          <div class="row">
                    <!--Primer columna-->
      
            <div class="col-sm-12 col-md-6">
              <h6>Sobre Nosotros</h6>
              <p class="text-justify">NoticiasEsports.com <i>NOTICIAS Esports</i> es una web especializada en la industria de los videojuegos. Somos un equipo de periodistas que, por encima de todas las cosas, les gusta disfrutar con los juegos. Un medio donde la opinión de todos los lectores es importante y además, abierta siempre a las ideas nuevas y a todo tipo de jugadores. Una comunidad que se construye en equipo y que gira alrededor de esta industria que amamos.</p>
            </div>
          
      
            <!--Segunda columna-->
            <div class="col-xs-6 col-md-3">
              <h6>Categorias</h6>
              <ul class="footer-links">
                <li><a href="http://scanfcode.com/category/c-language/">League Of Legends</a></li>
                <li><a href="http://scanfcode.com/category/front-end-development/">Counter Strike</a></li>
                <li><a href="http://scanfcode.com/category/back-end-development/">Valorant</a></li>
                <li><a href="http://scanfcode.com/category/java-programming-language/">Rocket League</a></li>
                <li><a href="http://scanfcode.com/category/android/">Mortal Kombat</a></li>
                <li><a href="http://scanfcode.com/category/templates/">FIFA</a></li>
                <li><a href="http://scanfcode.com/category/templates/">Rainbow Six</a></li>
              </ul>
            </div>
      <!--Tercer columna-->
            <div class="col-xs-6 col-md-3">
              <h6>Links Rápidos</h6>
              <ul class="footer-links">
                <li><a href="http://scanfcode.com/about/">Sobre nosotros</a></li>
                <li><a href="http://scanfcode.com/contact/">Contacto</a></li>
              
                <li><a href="http://scanfcode.com/privacy-policy/">Politica de privacidad</a></li>
                <li><a href="http://scanfcode.com/sitemap/">Inicio</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
           <a href="#">Noticias Esports</a>.
              </p>
            </div>
      
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
      </footer>
        
</body>
</html>
    
