<?php $titulo = "Universidad Politécnica de Pachuca" ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    include('./dotk/00head/analitycs.html');
    include('../lib20/core/10cabecera.html');
    include('../lib20/core/20estilos.html');
    include('../lib20/hgo/zoram_style_header.html');
  ?>
</head>

<body>
  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php
    //include ('../lib18/seph/hf/header.html');
        //include('../lib20/hgo/header.html');
    ?>
    <!-- Slider principal -->
    <?php //include('./dotk/01header/01carousel-principal/carousel.html'); ?>

    <div class="embed-responsive embed-responsive-21by9">
      <!--<iframe class="embed-responsive-item" src="https://youtu.be/qS0UchV6pyM" allowfullscreen></iframe>-->
      <iframe width="560" height="315" src="https://www.youtube.com/embed/qS0UchV6pyM" title="UPP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>


  </header>

  <?php include('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>

    <div class="container marketing">

      <!--

      <br>
      <a href="#">
        <img src="#" class="img-fluid rounded" alt="Responsive image" alt="upp">
        <p style="font-size:50px;">Lorem</p>
      </a>
      <br>
      <br>
    -->

      <a id="contacto"></a>
      <hr>
      <?php include('./dotk/05main/oferta-contacto.html'); ?>
      <br>

      <a id="marketing"></a>
      <hr>
      <?php include('./dotk/05main/01iconos/marketing.html'); ?>
      <br>

      <a id="aspirantes"></a>
      <hr class="featurette-divider">
      <?php include('./dotk/05main/03comunidad/aspirantes.html'); ?>

      <a id="comunidad"></a>
      <hr class="featurette-divider">
      <?php include('./dotk/05main/03comunidad/comunidadupp.html'); ?>
      <?php include('./dotk/05main/03comunidad/egresados.html'); ?>

      <a id="calendario"></a>
      <hr class="featurette-divider">
      <?php include('./dotk/05main/04gool/gcalendar.html'); ?>

      <a id="noticias"></a>
      <hr class="featurette-divider">
      <?php include('./dotk/05main/05entradas/nuevo.php'); ?>

      <hr class="featurette-divider">
      <?php
        if ($vedae == 0) {
          include('./dotk/05main/07ligasdint/iconosfooter.html');
        } else {
          include('./dotk/05main/07ligasdint/iconosfooter_veda.html');
        }
      ?>

      <a id="quejas"></a>
      <hr>
      <?php include('./dotk/05main/08contact/contacto.html'); ?>
      <br>

    </div>

    <?php //include ('./dotk/05main/contenido.html');?>

    <div class="container marketing">
      <a id="mapadesitio"></a>
      <br />
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include('../lib20/core/60menufooter.php'); ?>
    </div>
  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php //include ('../lib20/seph/hf/footer.html');?>
    <?php include('../lib20/hgo/footer.html'); ?>
  </footer>

  <?php
    include('../lib20/core/80js.html');
    include('../lib20/hgo/zoram_js_footer.html');
  ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib20/core/31script.js"></script>-->


</body>

</html>
