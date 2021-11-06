<?php
session_start();
if (empty($_SESSION['active'])) {
	header('location: ../');
}
include "../sesion.php";
?>
<?php
$query = mysqli_query($conexion, "SELECT * FROM message");
        $messages = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="images/png" href="./includes/aa.png" />
  <title>PANACARE | Administración</title>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../includes/aa.png" alt="PANACARE"  height="50" width="50">
    <h5>Sistema de Administración</h5s>
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.panacare.com.mx/nMlSIV9N4qpgtJnJ3P4w/pages/" class="brand-link">
      <img src="../../images/logg.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PANACARE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../pages/dist/img/user2-160x160.jpg" class="img-circle elevation-1" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block"><?php echo $_SESSION['nombre']; ?></a>
					<a><?php if ($_SESSION['rol'] == 1) {
							echo "Administrador";
						} else {
							echo "Colaborador";
						} ?></a>
        </div>
      </div>

			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<li class="nav-item">
				<a href="./" class="nav-link">
					<i class="nav-icon fas fa-home"></i>
					<p>
						Inicio
					</p>
				</a>
			</li>
			</ul>
			</nav>

			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<li class="nav-item">
				<a href="./messages.php" class="nav-link">
					<i class="nav-icon fas fa-envelope"></i>
					<p>
						Mensajes
						<span class="badge badge-info right"><?php echo $messages; ?></span>
					</p>
				</a>
			</li>
		</ul>
	</nav>


	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
	<li class="nav-item">
		<a href="./enfermeras.php" class="nav-link">
			<i class="nav-icon fas fa-user-nurse"></i>
			<p>
				Enfermeras
			</p>
		</a>
	</li>


	</ul>
	</nav>

	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
	<li class="nav-item">
		<a href="./agregar_personal.php" class="nav-link">
			<i class="nav-icon fas  fa-plus-square"></i>
			<p>
				Agregar Personal
			</p>
		</a>
	</li>
	</ul>
	</nav>


      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="salir.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Cerrar Sesión</p>
            </a>
          </li>
        </ul>
      </nav>

      <!-- Sidebar Menu -->
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">


        </div>


      </div>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
