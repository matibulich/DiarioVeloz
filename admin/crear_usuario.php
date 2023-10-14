<?php
    session_start();
    extract($_REQUEST);
   if (!isset( $_SESSION['usuario_logueado']))//pregunto que pasa si la persona NO esta logueada con !
        header("location:index.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia nueva</title>
    
    <link href="../lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="../lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


</head>
<body>

    <div class="container">
        <div>
        <?php         
        require("menu.php");
         ?>

         <h1>CREAR USUARIO</h1>   

         <form action="usuario_nuevo_guardar.php" method="post" enctype="multipart/form-data">

<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
     <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" required>
</div>

<div class="mb-3">
    <label for="apellido" class="form-label">Apellido</label>
     <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido" required>
</div>

<div class="mb-3">
    <label for="usuario" class="form-label">Nombre de usuario</label>
     <input type="text" class="form-control" id="usuario" placeholder="Nombre de usuario" name="usuario" onkeyup="validar(this.value)" required>
     <span id="mensaje_usuario"></span>
</div>



<div class="mb-3">
    <label for="password" class="form-label">Password</label>
     <input type="password" class="form-control" id="password" placeholder="Password" name="password" required> 
</div>



<div class="mb-3">
   
     <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Crear Usuario">
</div>


</form>

        </div>

    </div>

<script>
 

    function validar(str){
        if(str.length == 0){
            document.getElementById("mensaje_usuario").innerHTML=" ";
            return;
        }
        else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){

                if(this.readyState == 4 && this.status == 200){
                    if(this.responseText==1){

                    document.getElementById("enviar").disabled =true;   
                    document.getElementById("mensaje_usuario").innerHTML = "<p style = 'color:red'> El usuario ya existe </p>";}
                else
                        {
                            document.getElementById("enviar").disabled = false;
                            document.getElementById("mensaje_usuario").innerHTML = " ";
                             }
                }}
                xmlhttp.open("GET", "ajax_comprobar_usuario.php?usuario=" + str, true);
                xmlhttp.send();
            }

        }    

        



    
</script>




   
   

</body>
</html>