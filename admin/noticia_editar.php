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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../lib/summernote/summernote.min.js"></script>
    <link rel="stylesheet" href="../lib/bootstrap-5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../lib/summernote/summernote.min.css">
    
</head>
<body>

    <div class="container">
        <div>
        <?php         
        require("menu.php");
         ?>

         <h1>NOTICIA EDITAR</h1> 
         
<?php
    require("conexion.php");
    $conexion = mysqli_connect ($server_db,$usuario_db,$password_db)
    or die ("No se puede conectar con el servidor");
    mysqli_select_db ($conexion,$base_db)
    or die ("No se puede seleccionar la base de datos");
    $instruccion = "select * from noticias where id_noticia = $id_noticia";
    $consulta = mysqli_query($conexion, $instruccion) or die ("no pudo consultar");
    $resultado = mysqli_fetch_array($consulta);
    
    if (isset(($mensaje)))
       print("<h3>" .$mensaje. "</h3>")
    ?>

   

   
   


         <form action="noticia_editar_guardar.php" method="post" enctype="multipart/form-data">

<div class="mb-3">
    <label for="titulo" class="form-label">Titulo</label>
     <input type="text" class="form-control" id="titulo" placeholder="titulo" name="titulo" value="<?php print($resultado['titulo']);?>" required>
</div>

<div class="mb-3">
    <label for="copete" class="form-label">Copete</label>
     <input type="text" class="form-control" id="copete" placeholder="Copete" name="copete" value="<?php print($resultado['copete']);?>" required>
</div>

<div class="mb-3">
    <label for="cuerpo" class="form-label">Cuerpo</label>
    <textarea rows="10" class="form-control" id="cuerpo" name="cuerpo" required><?php print($resultado['cuerpo']);?></textarea>
</div>


<div class="mb-3">
    <label for="imagen" class="form-label">Imagen</label>
     <input type="file" class="form-control" id="imagen" placeholder="Imagen" name="imagen" > 
     <img src="../imagenes_subidas/<?php print($resultado['imagen']);?>" width="80px">
</div>

<div class="mb-3">
    <label for="autor" class="form-label">Autor</label>
     <input type="text" class="form-control" id="autor" placeholder="Autor" name="autor" value="<?php print($resultado['autor']);?>" required >
</div>

<div class="mb-3">
    <label for="categoria" class="form-label">Categoria</label>
     <select  class="form-control" id="categoria" placeholder="Categoria" name="categoria" required> 

     <option value="economia" <?php if($resultado['categoria']=="economia") print("selected");?>>Economia</option>
     <option value="deportes" <?php if($resultado['categoria']=="deportes") print("selected");?>>Deportes</option>
     <option value="moda" <?php if($resultado['categoria']=="moda") print("selected");?>>Sociales</option>

     </select>
</div>

<div class="mb-3">

    <input type="hidden" name="imagencita" value="<?php print($resultado['imagen']);?>">
    <input type="hidden" name="id_noticia" value="<?php print($resultado['id_noticia']);?>">
   
     <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Editar">
     <a href="noticia.php" class="btn btn-info">Volver</a>
</div>


</form>

        </div>

    </div>









    <!--summernote-->


    <div id="librerias">
        <script>
    $(document).ready(function() {
     $('#cuerpo').summernote();
    });
        </script>
    </div>
<!--summernote-->
   
   

    
    <script src="../lib/bootstrap-5.3.2/js/bootstrap.min.js"></script>
   <script src="../lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>