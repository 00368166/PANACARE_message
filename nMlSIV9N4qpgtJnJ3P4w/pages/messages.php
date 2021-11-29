<?php include_once "../includes/navbar.php";?>

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
          <h1>Timeline</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Timeline</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">


      <?php
      include "../sesion.php";
      $query = mysqli_query($conexion, "SELECT * FROM message");
              $messages = mysqli_num_rows($query);
      if ($messages > 0) {
      while ($messages = mysqli_fetch_assoc($query)) {
        $fecha = $messages['message_date'];
        $hora =  $messages['message_time'];
        $tel = $messages['message_telefono'];
        ?>

      <!-- Timelime example  -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <div class="timeline">
            <!-- timeline time label -->
            <div class="time-label">
              <span class="bg-red"><?php echo $fecha; ?></span>
            </div>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <div>
              <i class="fas fa-envelope bg-blue"></i>
              <div class="timeline-item">
                <span class="time"><i class="fas fa-clock"></i> <?php echo $hora; ?></span>
                <h3 class="timeline-header"><a><?php echo $messages['message_nombre']; ?></a> envió un mensaje</h3>

                <div class="timeline-body">
                  <?php echo $messages['message_text']; ?>
                </div>
                <div class="timeline-body">
                <a>Contacto: <?php echo $tel; ?></a>
                </div>
                <div class="timeline-footer">
                  <?php if ($_SESSION['rol'] == 1){ ?>
                    <form action="eliminar_mensaje?id=<?php echo $messages['message_id']; ?>" method="post" class="confirmar d-inline">
                      <button class="btn btn-danger btn-sm" type="submit"><i class='fas fa-trash-alt'> <a>Eliminar</a></i> </button>
                    </form>
                  <?php   } ?>
                    <a href="tel:<?=$tel?>" class="btn btn-sm bg-teal">
                      <i  class="fas fa-phone-volume"> Llamar</i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=521<?=$tel?>&text=Hola%20*<?=$messages['message_nombre']?>*%20es%20un%20gusto%20saludarte%20nos%20ponemos%20en%20contacto%20contigo%20por%20que%20nos%20dejaste%20un%20mensaje%20en%20nuestra%20pagina%20web%2C%20por%20el%20motivo%20de%20*<?=$messages['message_text']?>*,%20con%20gusto%20te%20atenderemos%20😄%20recuerda%20que%20para%20nosotros%20*La%20salud%20en%20tu%20mirada%20es%20nuestra%20inspiración*" class="btn btn-sm bg-teal">
                      <i  class="fab fa-whatsapp"> Whatsapp</i>
                    </a>

                </div>
              </div>
            </div>
            <!-- END timeline item -->


            <!--  <a href="editar_cliente?id=<?php //echo $data['idcliente']; ?>" class="btn btn-success"><i class='fas fa-edit'></i></a>
              <form action="eliminar_cliente?id=<?php //echo $data['idcliente']; ?>" method="post" class="confirmar d-inline">
                <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
              </form>
          </tr>
        -->
        <div>
          <i class="fas fa-clock bg-gray"></i>
        </div>
      </div>
      <?php } ?>
      <?php } ?>

        </div>
        <!-- /.col -->
      </div>


    </div>
    <!-- /.timeline -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


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
