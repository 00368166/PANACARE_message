<?php
include_once "includes/header.php";
include "interno/sesion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['telefono']) || empty($_POST['mensaje'])) {
      $alert = '<div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5>¡Alerta!</h5>
        Todos los campos son necesarios.
      </div>';
    } else {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
        //$dtz = new DateTimeZone("America/Mexico");
        //$dt = new DateTime("now", $dtz);
        date_default_timezone_set('America/Mexico_City');
        $mifecha = date('Y-m-d');
        $mitime = date('H:i:s');

$query = mysqli_query($conexion, "SELECT * FROM message where message_nombre = '$nombre'");
        $result = mysqli_fetch_array($query);
        if ($result > 0) {
          $alert = '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5>¡Alerta!</h5>
            Todos los campos son necesarios.
          </div>';
        } else {
            $query_insert = mysqli_query($conexion, "INSERT INTO message(message_nombre,message_telefono, message_text, message_date, message_time) values ( '$nombre', '$telefono', '$mensaje', '$mifecha', '$mitime') ");
            if ($query_insert) {
                $alert = '<div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
Mensaje enviado
                  </div>';
            }
          else {
            $alert = '<div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5>¡Alerta!</h5>
              El mensaje no se pudo enviar, utilize otro medio de comunicación.
            </div>';
        }
}
}
mysqli_close($conexion);
}
?>

<section id="home">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">

      <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <h1 class="hometitle" data-wow-delay="0.6s">PANACARE</h1>
        <p class="wow fadeInUp" data-wow-delay="0.9s">Somos  una agencia de enfermería comprometida con ofrecer el mejor servicio de cuidado en los momentos más apremiantes ofreciéndote una abanico de personal capacitado que se adapta a tus necesidades.</p>
        <a href="https://www.panacare.com.mx/#about" class="smoothScroll btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s">Acerca de nosotros</a>
      </div>

    </div>
  </div>
</section>








<!-- About section -->

<section id="about">
  <div class="container">
    <div class="row">

      <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay="0.2s">
        <div class="about-thumb">
          <h1><b>Mision</b></h1>
          <pp>Lorem ipsum dolor sit amet consectetur adipiscing elit aliquam, nulla facilisi molestie rhoncus curae mattis dictumst, cras commodo aptent eleifend lacus ac nisi. Metus lectus quis himenaeos non sociosqu hac mus, eget netus consequat felis sociis ac velit porttitor, iaculis nec nullam torquent posuere fringilla. Posuere arcu habitasse primis pellentesque fermentum nam morbi litora hendrerit dictumst interdum sapien ante sem sollicitudin, lobortis metus rutrum nascetur aliquam cubilia turpis justo elementum libero proin sodales dapibus montes. Per fames cubilia interdum pulvinar et dui elementum ad laoreet convallis aenean, ante dictum imperdiet posuere metus tincidunt rhoncus justo potenti habitasse litora, parturient pretium tempor rutrum sapien neque curae nam mattis velit.

Integer quisque magnis fames viverra nam quam ullamcorper, sed est ut aenean sapien iaculis commodo cursus, curae penatibus scelerisque nostra nisl vitae. Eleifend torquent accumsan primis in litora fringilla vitae, ligula hendrerit et rutrum scelerisque non leo, quisque platea aenean justo magnis imperdiet. Faucibus mi tincidunt neque primis etiam commodo, metus nec fusce hac senectus arcu egestas, erat elementum praesent ridiculus risus.</pp>
<h1><b>Vision</b></h1>
<pp>Lorem ipsum dolor sit amet consectetur adipiscing elit aliquam, nulla facilisi molestie rhoncus curae mattis dictumst, cras commodo aptent eleifend lacus ac nisi. Metus lectus quis himenaeos non sociosqu hac mus, eget netus consequat felis sociis ac velit porttitor, iaculis nec nullam torquent posuere fringilla. Posuere arcu habitasse primis pellentesque fermentum nam morbi litora hendrerit dictumst interdum sapien ante sem sollicitudin, lobortis metus rutrum nascetur aliquam cubilia turpis justo elementum libero proin sodales dapibus montes. Per fames cubilia interdum pulvinar et dui elementum ad laoreet convallis aenean, ante dictum imperdiet posuere metus tincidunt rhoncus justo potenti habitasse litora, parturient pretium tempor rutrum sapien neque curae nam mattis velit.

Integer quisque magnis fames viverra nam quam ullamcorper, sed est ut aenean sapien iaculis commodo cursus, curae penatibus scelerisque nostra nisl vitae. Eleifend torquent accumsan primis in litora fringilla vitae, ligula hendrerit et rutrum scelerisque non leo, quisque platea aenean justo magnis imperdiet. Faucibus mi tincidunt neque primis etiam commodo, metus nec fusce hac senectus arcu egestas, erat elementum praesent ridiculus risus.</pp>

        </div>
      </div>

      <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
        <img src="images/logg.jpg" class="img-responsive img-circle" alt="About">
      </div>



      <div class="clearfix"></div>

      <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title text-center">
          <h1><b>Nuestro equipo</b></h1>
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        </div>
      </div>

      <!-- team carousel -->
      <div id="team-carousel" class="owl-carousel">
      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
        <div class="team-thumb">
          <div class="image-holder">
            <img  src="images/team-img1.jpg" class="img-responsive img-circle" alt="Mary">
          </div>
          <h2 class="heading">Integrante 1</h2>
          <p class="description">Aliquam ac justo est. Praesent feugiat cursus estliquam ac justo est. Praesent feugiat cursus estliquam ac justo est. Praesent feugiat cursus estliquam ac justo est. Praesent feugiat cursus estliquam ac justo est. Praesent feugiat cursus est.</p>
          <div class="cc">
            <a href="/" align="right" class="description">Leer mas</a>
          </div>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img2.jpg" class="img-responsive img-circle" alt="Jack">
          </div>
          <h2 class="heading">Integrante 2</h2>
          <p class="description">Maecenas sed diam eget risus varius blandit sit non.</p>
          <div class="cc">
            <a href="/" align="right" class="description">Leer mas</a>
          </div>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img3.jpg" class="img-responsive img-circle" alt="Linda">
          </div>
          <h2 class="heading">Integrante 3</h2>
          <p class="description">Phasellus nec ante in nunc molestie tincidunt ut eu diam.</p>
          <div class="cc">
            <a href="/" align="right" class="description">Leer mas</a>
          </div>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img4.jpg" class="img-responsive img-circle" alt="Sandy">
          </div>
          <h2 class="heading">Integrante 4</h2>
          <p class="description">Curabitur vulputate euismod neque et tincidunt.</p>
          <div class="cc">
            <a href="/" align="right" class="description">Leer mas</a>
          </div>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img5.jpg" class="img-responsive img-circle" alt="Lukia">
          </div>
          <h2 class="heading">Integrante 5</h2>
          <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
          <div class="cc">
            <a href="/" align="right" class="description">Leer mas</a>
          </div>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img6.jpg" class="img-responsive img-circle" alt="George">
          </div>
          <h2 class="heading">Integrante 6</h2>
          <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
          <div class="cc">
            <a href="/" align="right" class="description">Leer mas</a>
          </div>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img7.jpg" class="img-responsive img-circle" alt="Day">
          </div>
          <h2 class="heading">Integrante 7</h2>
          <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
          <div class="cc">
            <a href="/" align="right" class="description">Leer mas</a>
          </div>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img8.jpg" class="img-responsive img-circle" alt="Lynn">
          </div>
          <h2 class="heading">Integrante 8</h2>
          <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
          <div class="cc">
            <a href="/" align="right" class="description">Leer mas</a>
          </div>
        </div>
      </div>

      </div>
      <!-- end team carousel -->

    </div>
  </div>
</section>


<!-- Gallery section -->

<section id="gallery">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title">
          <h1><b>Servicios</b></h1>
          <p>Descripcion de los servicios que se ofrecen.</p>
        </div>
      </div>

      <ul class="grid cs-style-4">
        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="images/care.jpg" alt="image 1"></div>
            <figcaption>
              <h2>Enfermeria geriatrica</h2>
              <small>Cum sociis natoque penatibus et magnis dis parturient montes.</small>
              <a href="#">Leer mas</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="images/ped.jpg" alt="image 2"></div>
            <figcaption>
              <h2>Enfermeria Pediatrica</h2>
              <small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
              <a href="#">Leer mas</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="images/ser.jpg" alt="image 3"></div>
            <figcaption>
              <h2>Enfermeria Auxiliar</h2>
              <small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
              <a href="#">Leer mas</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="images/equi.jpg" alt="image 4"></div>
						<figcaption>
              <h2>Equipamiento hospitalario</h2>
              <small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
              <a href="#">Detalles</a>
            </figcaption>
          </figure>
        </li>
      </ul>

    </div>
  </div>
</section>


<!-- Contact section -->

<section id="contact">
  <div class="container">
    <div class="row">

       <div class="col-md-offset-1 col-md-10 col-sm-12">

        <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
          <h1>Mandanos un mensaje</h1>
          <p>Para contratar un servicio o formar parte de nuestro equipo</p>
        </div>

<form method="post"  class="wow fadeInUp" data-wow-delay="0.8s" onsubmit="window.location.href = './#contact';">
  <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
      <?php echo isset($alert) ? $alert : ""; ?>
  </div>
          <div class="col-md-6 col-sm-6">
            <input  type="text" class="form-control" name="nombre" id="name" placeholder="Nombre">
          </div>
          <div class="col-md-6 col-sm-6">
            <input  type="phone" class="form-control" name="telefono" id="phone" placeholder="Telefono Ej: &ldquo;9511876322&rdquo;">
          </div>
          <div class="col-md-12 col-sm-12">
            <textarea type="text" rows="6" class="form-control" name="mensaje" id="message" placeholder="Mensaje"></textarea>
          </div>
          <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
            <input type="submit" class="form-control" value="Enviar mensaje">
          </div>
        </form>


      </div>
    </div>
    <div class="col-md-offset-3  col-sm-6">
      <h1><a href="tel:9511876322" class="fa fa-phone wow fadeInUp" data-wow-delay="1.1s"> Llamanos ahora</a></h1>
    </div>
  </div>
</section>

<?php include_once "includes/footer.php"; ?>
