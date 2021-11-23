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
          <h1>Clientes</h1>
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
    $query = mysqli_query($conexion, "SELECT * FROM clientes");
            $clientes = mysqli_num_rows($query);
    if ($clientes > 0) {
    while ($clientes = mysqli_fetch_assoc($query)) {
      $nombre = $clientes['clientes_nombre'];
      $id = $clientes['clientes_id'];
      $direccion =  $clientes['clientes_direccion'];
      $tel = $clientes['clientes_telefono'];
        $atencion = $clientes['clientes_atencion'];
          $descrip = $clientes['clientes_descripcion'];
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
                  <p class="text-muted text-sm"><b>Atencion: </b><?php echo $atencion?></p>
                  <p class="text-muted text-sm"><b>Detalles del servicio: </b><?php echo $descrip?></p>
                  <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Direccion: <?php echo $direccion?></li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: + 52 <?php echo $tel ?></li>
                  </ul>
                </div>
                <div class="col-5 text-center">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <?php if ($_SESSION['rol'] == 1){ ?>
                  <form action="eliminar_clientes.php?id=<?php echo $id;?>" method="post" class="confirmar d-inline">
                    <button class="btn btn-danger btn-sm" type="submit"><i class='fas fa-trash-alt'> <a>Eliminar</a></i> </button>
                  </form>
                <?php   } ?>
                <a href="tel:<?=$tel?>" class="btn btn-sm bg-teal">
                  <i  class="fas fa-comments"> Llamar</i>
                </a>
                <a href="https://api.whatsapp.com/send?phone=521<?=$tel?>&text=Hola%20*<?=$nombre?>*%2C%20nos%20permitimos%20contactarte%20por%20whatsapp%20para%20confirmar%20tu%20solicitud%20del%20servicio%20de%3A%20*<?=$atencion?>*%20con%20las%20siguientes%20características%3A%20*<?=$descrip?>*%20en%20*<?=$direccion?>*%20" class="btn btn-sm bg-teal">
                  <i  class="fab fa-whatsapp"> Whatsapp</i>
                </a>

                <a href="#" class="btn btn-sm btn-primary">
                  <i class="fas fa-user"></i> Editar perfil
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
