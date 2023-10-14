

<!--BARRA DE NAVEGACION -->

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.php">Volver al portal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="noticia.php">Noticias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuarios.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="crear_usuario.php">Crear Usuario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Salir</a>
        </li>
        <li class="nav-item">
            <?php
                print("<a class='nav-link '>" . $_SESSION["nombre"]." ". $_SESSION["apellido"] .  "</a>")

            ?>
        </li>
      </ul>
    </div>
  </div>
</nav>