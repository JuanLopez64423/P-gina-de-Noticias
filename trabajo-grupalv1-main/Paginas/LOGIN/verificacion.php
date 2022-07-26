<?php
$usu_nombreDeUsuario=$_POST['usu_nombreDeUsuario'];
$usu_contrasena=$_POST['usu_contrasena'];

$_SESSION['usu_nombreDeUsuario'] = $usu_nombreDeUsuario;


require "conexion.php";

$sql="select * from usuarios where usu_nombreDeUsuario='$usu_nombreDeUsuario' and usu_contrasena='$usu_contrasena';";

$resulset=mysqli_query($conn,$sql);

$filas=mysqli_num_rows($resulset);

if($filas){
    header("location: ../1-index/index.html");
}

else{
    ?>
    <?php
    include("login.php");
    ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 style="width: 200vw;
    height:10vh ; background-color:red;position:relative;left:-30vw;">ERROR EN LA AUTENTIFICACIÓN</h1>
    <style>
        #formulario{
    position: relative;
    top:12vh;
    left:30vw;
    
        }

    </style>
    <?php
}


mysqli_free_result($resulset);
mysqli_close($conn);

?>