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

//metodo 1
    $titulo=mysqli_real_escape_string($conexion,$titulo);
    $copete=mysqli_real_escape_string($conexion,$copete);
    $cuerpo=mysqli_real_escape_string($conexion,$cuerpo);
    $autor=mysqli_real_escape_string($conexion,$autor);
 //Subir imagen
 $copiarArchivo=false;
 if(is_uploaded_file($_FILES['imagen']['tmp_name'])){

    $nombreDirectorio="../imagenes_subidas/";
    $idUnico = time();
    $nombreFichero=$idUnico . $_FILES['imagen']['name'];
    $copiarArchivo = true; }  

    else
        $nombreFichero="";
//preguntamos si es true, se mueve el archivo
 if($copiarArchivo){
    move_uploaded_file($_FILES['imagen']['tmp_name'],$nombreDirectorio. $nombreFichero );
 }
 
  
   

    $instruccion = "insert into noticias(titulo,copete,cuerpo,imagen,categoria,id_usuario,fecha,autor) values ('$titulo','$copete','$cuerpo','$nombreFichero','$categoria', '$id_usuario', '$fecha','$autor')";
    $consulta = mysqli_query($conexion, $instruccion)
            or die ("No pudo insertar");


//metodo 2
    /*$stmt=mysqli_prepare($conexion,"insert into noticias (titulo,copete,cuerpo,imagen,categoria,id_usuario,fecha) values (?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt,'sssssds', $titulo,$copete,$cuerpo,$imagen,$categoria,$id_usuario,$fecha);
   mysqli_stmt_execute($stmt);*/

    mysqli_close($conexion);
    header("location:noticia.php?mensaje=Guardado correctamente");

    
?>