<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link rel="stylesheet" href="lib/bootstrap-5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/menu_index.css">
</head>
<body>
    <div class="container p-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Diario Veloz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="noticia.php">Categorias</a>
        </li>
    
        <li class="nav-item">
          <a class="nav-link" href="./admin/noticia.php">Panel-admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </div>
<header class="container d-flex justify-content-around align-items-center">
    <h1>NOTICIAS</h1> 
</header>
    <div class="container">
                   
     
        <div class="row mt-5">
        <?php
        
        require("./admin/conexion.php");
 
 $conexion = mysqli_connect ($server_db,$usuario_db,$password_db)
    or die ("No se puede conectar con el servidor");
mysqli_select_db ($conexion,$base_db)
    or die ("No se puede seleccionar la base de datos");
$instruccion = "select * from noticias order by fecha desc";




$consulta = mysqli_query($conexion,$instruccion)
    or die ("No puedo consultar");
$nfilas=mysqli_num_rows($consulta);

for($i=0;$i<$nfilas;$i++){   
    $resultado = mysqli_fetch_array($consulta);

    print('
    

    <div class="col-lg-4 col-md-6 col-sm-12 mb-3 ">
    
    
    <div class="card h-100 ">
        <img src="imagenes_subidas/'.$resultado['imagen']. '" class="card-img-top" alt=" '.$resultado ['titulo'].'">
        <div class="card-body">
        <h5 class="card-title">'.$resultado['titulo'].'</h5>
        <p class="card-text"> '.$resultado ['copete'].' </p>
        <p class="card-text"> '.$resultado ['fecha'].' </p>
        <a href="./admin/ver_noticia.php?id_noticia='.$resultado['id_noticia'].'" class="btn btn-primary ">Más informacion</a>
        
        </div>
    </div>
    
    </div>  
    ');     
    
                       }
mysqli_close($conexion);
?>
     
</div>




    <script src="lib/bootstrap-5.3.2/js/bootstrap.min.js"></script>
   <script src="lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>