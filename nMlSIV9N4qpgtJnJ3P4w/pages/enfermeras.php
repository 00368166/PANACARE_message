<?php include_once "../includes/navbar.php"; ?>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Enfermeras</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card card-solid">
      <div class="card-body pb-0">
        <!-- Default box -->
        <div class="row">
    <?php
    include "../sesion.php";
    $query = mysqli_query($conexion, "SELECT * FROM enfermeras");
            $enfermeras = mysqli_num_rows($query);
    if ($enfermeras > 0) {
    while ($enfermeras = mysqli_fetch_assoc($query)) {
      $id = $enfermeras['enfermeras_id'];
      $nombre = $enfermeras['enfermeras_nombre'];
      $disponibilidad =  $enfermeras['enfermeras_disponibilidad'];
      $tel = $enfermeras['enfermeras_telefono'];
        $nacimiento = $enfermeras['enfermeras_nacimiento'];
          $descrip = $enfermeras['enfermeras_general'];
      ?>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
              Tarjeta de contacto
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <h2 class="lead"><b><?php echo $nombre ?></b></h2>
                  <p class="text-muted text-sm"><b>Acerca de: </b><?php echo $descrip?></p>
                  <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-user-clock"></i></span> Disponibilidad: <?php echo $disponibilidad?></li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono: + 52 <?php echo $tel ?></li>
                  </ul>
                </div>
                <div class="col-5 text-center">
                  <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <?php if ($_SESSION['rol'] == 1){ ?>
                  <form action="eliminar_enfermeras.php?id=<?php echo $id;?>" method="post" class="confirmar d-inline">
                    <button class="btn btn-danger btn-sm" type="submit"><i class='fas fa-trash-alt'> <a>Eliminar</a></i> </button>
                  </form>
                  <form action="editar_personal.php?id=<?php echo $id;?>" method="post" class="confirmar d-inline">
                    <button class="btn btn-sm btn-primary" type="submit"><i class='fas fa-user'> <a>Editar perfil</a></i> </button>
                  </form>
                <?php   } ?>
                <a href="tel:<?=$tel?>" class="btn btn-sm bg-teal">
                  <i  class="fas fa-comments"> Llamar</i>
                </a>
                <a href="https://api.whatsapp.com/send?phone=521<?=$tel?>&text=Hola%20*<?=$nombre?>*%2C%20nos%20permitimos%20contactarte%20por%20whatsapp%20para%20confirmar%20que%20aun%20cuentes%20con%20la%20siguiente%20disponibilidad%3A%20*<?=$disponibilidad?>*%20por%20motivo%20de%20que%20tienes%20una%20oferta%20de%20servicio%20disponible%2C%20esperamos%20tu%20pronta%20respuesta." class="btn btn-sm bg-teal">
                  <i  class="fab fa-whatsapp"> Whatsapp</i>
                </a>

              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <?php } ?>

    </div>
    </div>
    <!-- /.card-footer -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
<?php include_once "../includes/footer.php"; ?>
