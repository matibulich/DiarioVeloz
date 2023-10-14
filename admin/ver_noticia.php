<?php
    session_start();
    extract($_REQUEST);
    
   
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia nueva</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../lib/summernote/summernote.min.js"></script>
    <link rel="stylesheet" href="../lib/bootstrap-5.3.2/css/bootstrap.min.css">

    
</head>
<body>

<div class="container p-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Diario Veloz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="noticia.php">Categorias</a>
        </li>
    
        <li class="nav-item">
          <a class="nav-link" href="noticia.php">Panel-admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </div>
     

        
         
<?php
    require("conexion.php");
    $conexion = mysqli_connect ($server_db,$usuario_db,$password_db)
    or die ("No se puede conectar con el servidor");
    mysqli_select_db ($conexion,$base_db)
    or die ("No se puede seleccionar la base de datos");
    $instruccion = "select * from noticias where id_noticia = $id_noticia";
    
    $consulta = mysqli_query($conexion, $instruccion) or die ("no pudo consultar");
    $resultado = mysqli_fetch_array($consulta);
   
    ?>
<div class="container d-flex flex-column justify-content-evenly justify-content-center">
<div class ="row p-3">
  
<h2><?php print($resultado['titulo']);?></h2> 
</div>

<div class ="row p-3">
 
<label for="autor">AUTOR</label><span style="color: blue;">
<h4><?php print($resultado['autor']);?></h4> 
</div>



<div class ="row p-3 d-flex ">
<img src="../imagenes_subidas/<?php print($resultado['imagen']);?>" width="80px"> 
</div>
<div class ="row p-3">
<h4><?php print($resultado['copete']);?></h4>
</div>
<div class ="row class border-bottom border-primary p-3">
<?php print($resultado['cuerpo']);?>
</div>









<div>
<label for="categoria">Categoria</label><span style="color: blue;">




<?php print($resultado['categoria']);?></span>
</div>

  

<div class="d-flex justify-content-evenly">    
<a href="javascript:history.back() " class="btn btn-primary mt-2 mb-3" >Volver</a>     
</div>



   






   
   

    
    <script src="../lib/bootstrap-5.3.2/js/bootstrap.min.js"></script>
   <script src="../lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>