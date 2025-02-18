<style>
  .fondo-navbar{
    box-shadow: 0px 5px 5px #C6C2C2;
      }
    .bg-custom, .dropdown-menu, .dropdown-item {
        background-color: #1765be;
      }
      .dropdown-item:hover{
        background-color: #5D9CE3;
      }
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text,
    .dropdown-item, .nav-link{
        color: #cbbde2;
      }
    .navbar-custom .navbar-brand:hover,
    .navbar-custom .navbar-text:hover,
    .dropdown-item:hover, .nav-link:hover{
        color: white;
    }
    .PerifeficosVida{
      color: #cbbde2;
    }
    .form-control{
      width: 300px; 
    }
    .transparentar{
      color: #1765be;
    }
    .perfil{
      opacity: 0.85;
    }
    .perfil:hover{
      opacity: 1;
    }
    .icono-principal{
      opacity: 0.9;
    }
    .icono-principal:hover{
      opacity: 1;
    }
    .btn-custom{
      background-color: #1765be;
    }
</style>
<?php
    include '../conexionConBD.php';

    $idUsuario  = $_SESSION['id_perfil_registro'];

    $sql = "SELECT * FROM carrito WHERE carrito.idUsuario =".$idUsuario;
    $contarCarrito = $conexion->query($sql);

    $count = mysqli_num_rows($contarCarrito);
?>
<!-- Navbar -->
<div class="fondo-navbar">
<nav class="navbar navbar-expand-lg navbar-custom bg-custom">
  <a class="navbar-brand"><img class="icono-principal" src="img/logotech2.png" alt="" width="30px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only"></span></a>
      </li>
      
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true">
            Categorías
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <dl>
          <p class="PerifeficosVida"> Perifericos</p>
            <ul>
              <li type="disc"><a class="dropdown-item" href="categorias.php?categoria='Altavoces'">Altavoces</a></li>
              <li type="disc"><a class="dropdown-item" href="categorias.php?categoria='Auriculares'">Audífonos</a></li>
              <li type="disc"><a class="dropdown-item" href="categorias.php?categoria='Pantalla'">Monitores</a></li>
              <li type="disc"><a class="dropdown-item" href="categorias.php?categoria='Mouse'">Mouse</a></li>
            </ul>

            <p class="PerifeficosVida"> Vida Diaria</p>
            <ul>
              <li type="disc"><a class="dropdown-item" href="categorias.php?categoria='Telefonós'">Telefonós</a></li>
              <li type="disc"><a class="dropdown-item" href="categorias.php?categoria='Relojes'">Relojes</a></li>
            </ul>

          </div>
        </li>

        <li>
          <p class="transparentar">aaaaaa</p>
        </li>
        <li>

    <!----------------- Buscador -------------------->
        <form class="form-row" action="resultadoBusqueda.php"> 
          <input name="termino" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
        </form>

      </li>
    </ul>
    <!----------------- Carrito -------------------->
    
    <a  href="vistaCarrito.php" role="button aria-haspopup="true" aria-expanded="false">
  <img class="perfil" src="img/carrito.png"  width="30px">
  <button type="button" class="btn btn-custom">
    <span class="badge badge-light"><?php echo $count; ?></span>
  </button>
  </a>

<p class="transparentar">aaaaaa</p>

    <!--------------- Cuenta --------------->
    <div class="dropdown show">
  <a  href="index.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img class="perfil" src="img/perfil.png" alt="" width="30px">
  </a>

  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="perfil.php">Perfil</a>
    <a class="dropdown-item" href="venderProductos.php">Verder producto</a>
    <a class="dropdown-item" href="vistaVenderProductos.php">Tus productos en venta</a>
    <a class="dropdown-item" href="cerrarSesion.php">Cerrar sesión</a>
  </div>
</div>
  </div>
</nav>
</div>