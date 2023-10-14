<?php
    session_start();
    extract($_REQUEST);
   if (isset( $_SESSION['usuario_logueado']))
        header("location:home.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../lib/bootstrap-5.3.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div>
            

            <form action="login.php" method="post">

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                 <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usuario" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                 <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>

            <div class="mb-3">
               
                 <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Login">
            </div>

            <?php 
                if (isset($_SESSION["mensaje"])){

                    print($_SESSION["mensaje"]);
                    unset($_SESSION["mensaje"]); //eliminamos la variable de error

                }   //variable de session que envia mensaje de error de logueo
            ?>

            </form>
        </div>

    </div>
    

   <script src="../lib/bootstrap-5.3.2/js/bootstrap.min.js"></script>
   <script src="../lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>