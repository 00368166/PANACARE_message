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
      $regexp = '/^[A-Za-zÀ-ÿ\u0021\u00f1\u002C\u002e\u0040\u003f\u00a1\u00bf\u00d10-9\s+]+$/i';
      $regexp2 = '/^[A-Za-zÀ-ÿ\u00f1\u00d1\s+]+$/i';

      $resultado = preg_match($regexp2, $nombre);
      $resultado2 = preg_match($regexp, $mensaje);
      $resultado3 = preg_match($regexp, $telefono);

if(!$resultado){
  $alert = '<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5>¡Alerta!</h5>
    Nombre no valido, no se permiten numeros ni caracteres especiales.
  </div>';
}
else{
      if( $resultado2 && $resultado3) {



      if(strlen($_POST['nombre'])>8 && strlen($_POST['nombre']) < 100 ){
      if(strlen($_POST['telefono']) != 10){
        $alert = '<div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5>¡Alerta!</h5>
          Ingrese un numero de telefono valido.
        </div>';
      }
      else{


        //$dtz = new DateTimeZone("America/Mexico");
        //$dt = new DateTime("now", $dtz);
        date_default_timezone_set('America/Mexico_City');
        $mifecha = date('Y-m-d');
        $mitime = date('H:i:s');

$query = mysqli_query($conexion, "SELECT * FROM message where message_telefono = '$telefono'");
        $result = mysqli_fetch_array($query);
        if ($result > 0) {
          $alert = '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5>¡Alerta!</h5>
            Ya hemos recibido su mensaje previamente.
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
}
else{
  $alert = '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5>¡Alerta!</h5>
    Ingrese nombre y apellido de almenos 8 letras.
  </div>';
}
}
else{
  $alert = '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5>¡Alerta!</h5>
    No se aceptan caracteres especiales como: *-+|"#$%&/()=
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
          <pp>Ofrecer tranquilidad tanto a familiares como pacientes durante sus dolencias, siempre brindando un servicio de acompañamiento y cuidado variado, personalizado, constante, cálido y correcto en los momentos más apremiantes para alcanzar un óptimo estado de salud.</pp>
<h1><b>Vision</b></h1>
<pp>Llegar a ser una agencia líder en el mercado oaxaqueño que pueda contratar no solo una alta gama de enfermeros, sino que también ofrezca una enorme variedad de especialidades médicas, de modo que ninguno de nuestros clientes vuelva a pasar por la angustia de no saber a quién acudir.</pp>
<h1><b>Valores</b></h1>
<pp>
<b>
  Respeto:<br>
</b>
  Dar valor a todos los individuos reconociendo y aceptando la importancia de los demás.
<br>
  <b>
    Responsabilidad:<br>
  </b>
  Cuidar tanto de nuestro personal como de nuestros pacientes en respuesta de la confianza que se nos otorga.
<br>
  <b>
    Solidaridad:<br>
  </b>
  Proteger la salud de aquellos que presenten convalecientes siempre tratándolos con dignidad y humanidad.
<br>
  <pp>
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

        <?php

        include "interno/sesion.php";
        $query = mysqli_query($conexion, "SELECT * FROM enfermeras");
                $enfermeras = mysqli_num_rows($query);
        if ($enfermeras > 0) {
        while ($enfermeras = mysqli_fetch_assoc($query)) {
          $nombre = $enfermeras['enfermeras_nombre'];
          $general =  $enfermeras['enfermeras_general'];
          $dispo = $enfermeras['enfermeras_disponibilidad'];
          $foto = $enfermeras['nombre_imagen'];
          ?>

          <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="team-thumb">
              <div class="image-holder">
                <img src="fotos/enfermeras/<?php  echo $foto ?>" class="img-responsive img-circle" alt="Jack">
              </div>
              <h2 class="heading"><?php echo $nombre ?></h2>
              <div class="row">
              <p class="description"><?php echo $general ?><br></p>
              <p>
                <a class="description">Disponibilidad: <?php echo $dispo ?></a>
              </p>
            </div>
            <div class="row">
          </div>
              <div class="cc">
                <a href="/" align="right" class="description">Leer mas</a>
              </div>
            </div>
          </div>


        <?php } ?>
        <?php } ?>

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
              <h2>Servicios de enfermería</h2>
              <small>Cum sociis natoque penatibus et magnis dis parturient montes.</small>
              <a href="servicios_de_enfermeria">Leer mas</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="images/ped.jpg" alt="image 2"></div>
            <figcaption>
              <h2>Renta de equipo hospitalario</h2>
              <small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
              <a href="rentas_de_equipo_hospitalario">Leer mas</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="images/ser.jpg" alt="image 3"></div>
            <figcaption>
              <h2>Asesoramiento</h2>
              <small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
              <a href="asesorias_en_el_cuidado_de_tu_familiar">Leer mas</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="images/equi.jpg" alt="image 4"></div>
						<figcaption>
              <h2>Venta de insumos médicos</h2>
              <small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
              <a href="venta_de_insumos">Detalles</a>
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
            <input  type="tel" class="form-control" name="telefono" id="phone" placeholder="Telefono Ej: &ldquo;9511876322&rdquo;">
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

<!-- Footer section -->
<footer>
	<div class="container">
		<div class="col-md-offset-1 col-md-10 col-sm-12">
			<div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="1.0s">
<h1>ó</h1>
				<h1>contactanos en cualquiera de nuestras redes sociales.</h1>

			</div>
		</div>

<?php include_once "includes/footer.php"; ?>
