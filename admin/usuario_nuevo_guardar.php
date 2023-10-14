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
    //$fecha= date("Y-m-d");
   // $id_usuario = $_SESSION['id_usuario'];
   $salt = substr($usuario, 0, 2);
//metodo 1
    $nombre=mysqli_real_escape_string($conexion,$nombre);
    $apellido=mysqli_real_escape_string($conexion,$apellido);
    $usuario=mysqli_real_escape_string($conexion,$usuario);
    $password=mysqli_real_escape_string($conexion,$password);


   
    
    $password=mysqli_real_escape_string($conexion,$password); //escapamos para que no se pueda inyectar codigo ajeno
    $clave_crypt = crypt($password, $salt); //clave encryptada
    
 
  
   

    $instruccion = "insert into usuarios(nombre,apellido,usuario,password) values ('$nombre','$apellido','$usuario','$clave_crypt')";
    $consulta = mysqli_query($conexion, $instruccion)
            or die ("No pudo insertar");


//metodo 2
    /*$stmt=mysqli_prepare($conexion,"insert into noticias (titulo,copete,cuerpo,imagen,categoria,id_usuario,fecha) values (?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt,'sssssds', $titulo,$copete,$cuerpo,$imagen,$categoria,$id_usuario,$fecha);
   mysqli_stmt_execute($stmt);*/

    mysqli_close($conexion);
    header("location:noticia.php?mensaje=Usuario creado correctamente");

    
?>