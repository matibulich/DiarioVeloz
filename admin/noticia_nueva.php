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
    <link rel="stylesheet" href="../lib/bootstrap-5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../lib/summernote/summernote.min.css">
    <script src="../lib/summernote/summernote.min.js"></script>
</head>
<body>

    <div class="container">
        <div>
        <?php         
        require("menu.php");
         ?>

         <h1>CREAR NOTICIA</h1>   

         <form action="noticia_nueva_guardar.php" method="post" enctype="multipart/form-data">

<div class="mb-3">
    <label for="titulo" class="form-label">Titulo</label>
     <input type="text" class="form-control" id="titulo" placeholder="titulo" name="titulo" required>
</div>

<div class="mb-3">
    <label for="copete" class="form-label">Copete</label>
     <input type="text" class="form-control" id="copete" placeholder="Copete" name="copete" required>
</div>

<div class="mb-3">
    <label for="cuerpo" class="form-label">Cuerpo</label>
     <textarea rows="10" class="form-control" id="cuerpo" placeholder="Cuerpo" name="cuerpo" required> </textarea>
</div>

<div class="mb-3">
    <label for="imagen" class="form-label">Imagen</label>
     <input type="file" class="form-control" id="imagen" placeholder="Imagen" name="imagen" required> 
</div>

<div class="mb-3">
    <label for="autor" class="form-label">Autor</label>
     <input type="text" class="form-control" id="autor" placeholder="Autor" name="autor"
     
     required >
</div>


<div class="mb-3">
    <label for="categoria" class="form-label">Categoria</label>
     <select  class="form-control" id="categoria" placeholder="Categoria" name="categoria" required> 

     <option value="economia">Economia</option>
     <option value="deportes">Deportes</option>
     <option value="sociales">Sociales</option>
     <option value="moda">Moda</option>
     <option value="politica">Politica</option>

     </select>
</div>

<div class="mb-3">
   
     <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Crear">
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