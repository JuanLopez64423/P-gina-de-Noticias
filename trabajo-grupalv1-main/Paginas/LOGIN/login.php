<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #3b8eed;background-image: url('botones.jpg');display:flex;justify-content:center;">


<form  id="formulario" >
<h1 style="color:white;border:2px solid red;width: 40vw;
    height:20vh; text-align:center;position:relative; left:-3vw;background-color:black;background-size:200% 
;"><p style="position:relative;top:1.7vh;"> INICIO DE SESION </p> </h1>
<input style="border-radius:25px;height: 4vh; 
    width:100%; margin:10px;padding-left:1%; border:2px solid #014ba0;" type="text" name="usu_nombreDeUsuario" placeholder="Usuario" required> <br>

<input style="border-radius:25px;height: 4vh; 
    width:100%;margin:10px;padding-left:1%; border:2px solid #014ba0;" type="password" name="usu_contrasena" placeholder="Contraseña" required> <br>

<br><br>
<input style="border-radius: 25px;height: 5vh; 
    width:50%; background-color:#014ba0; color:white; cursor:pointer;position:relative; left:9vw; " type="submit" value="Iniciar Sesion"  formaction="verificacion.php" formmethod="POST" >

</form>
    
</body>
</html>