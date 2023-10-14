<?php

session_start();
extract($_REQUEST);
if (!isset( $_SESSION['usuario_logueado']))
     header("location:home.php");


 require("conexion.php");
 
 $conexion = mysqli_connect ($server_db,$usuario_db,$password_db)
    or die ("No se puede conectar con el servidor");
mysqli_select_db ($conexion,$base_db)
    or die ("No se puede seleccionar la base de datos");
    $fecha= date("Y-m-d");
    $id_usuario = $_SESSION['id_usuario'];



    $instruccion = "delete from noticias where id_noticia = '$id_noticia'";
    $consulta = mysqli_query($conexion, $instruccion)
            or die ("No pudo insertar");
     unlink("../imagenes_subidas/".$imagen);


    
   mysqli_close($conexion);
   header("location:noticia.php?mensaje=Guardo");
?>