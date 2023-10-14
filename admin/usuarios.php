<?php
    session_start();
    extract($_REQUEST);
   if (!isset( $_SESSION['usuario_logueado']))//pregunto que pasa si la persona NO esta logueada con !
        header("location:home.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link rel="stylesheet" href="../lib/bootstrap-5.3.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        
        <?php         
        require("menu.php");
         ?>

         <h1>USUARIOS</h1> 

         <table class="table table-dark table-striped table-hover table-responsive">
        <thead class="table-secondary">
         <tr>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>  
    
        </tr>
        </thead>
      
        

        
        <?php
        
        require("conexion.php");
 
 $conexion = mysqli_connect ($server_db,$usuario_db,$password_db)
    or die ("No se puede conectar con el servidor");
mysqli_select_db ($conexion,$base_db)
    or die ("No se puede seleccionar la base de datos");
$instruccion = "select * from usuarios";


//trabajar con super usuario y discriminacion de usuarios
        /*
        if(isset($_SESSION['SUPER']))
            $instruccion="select * from noticias order by fecha desc";
            else
             $instruccion="select * from noticias where id_usuario=".$_SESSION['id_usuario']." order by fecha desc";
       */



$consulta = mysqli_query($conexion,$instruccion)
    or die ("No puedo consultar");
$nfilas=mysqli_num_rows($consulta);

for($i=0;$i<$nfilas;$i++){

    $resultado = mysqli_fetch_array($consulta);
    print('
            <tr>
                <td>'.trim($resultado['usuario']).'</td>
                <td>'.trim($resultado['nombre']).'</td>
                <td> '.($resultado['apellido']).'</td>
                <td><a href="borrar_usuario.php?id_usuario='.$resultado['id_usuario'].'" class="btn btn-danger" onclick="return confirm(&quot; Desea eliminar? &quot;)">borrar</a></td>
              
            </tr>
    
    ');
}
  mysqli_close($conexion);      
        
        ?>
</table>
<a class="btn btn-success" href="crear_usuario.php">Crear</a>
    </div>




    <script src="../lib/bootstrap-5.3.2/js/bootstrap.min.js"></script>
   <script src="../lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>