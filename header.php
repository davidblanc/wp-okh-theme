<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta name="description" content="Ok Humedades Especialistas en Humedad. Solución definitiva para todo tipo de humedades. Solicita diagnóstico gratuito. 30 años de garantía">


  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="node_modules/normalize.css/" rel="stylesheet" type="text/css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;500&display=swap" rel="stylesheet">

  <!-- <link href="<?php echo THEMEROOT; ?>/style.css" rel="stylesheet">  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/7fc14f5637.js" crossorigin="anonymous"></script>
  <!-- <script src="/sc.js"></script> -->
  <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php bloginfo('pingback_url'); ?>">
  <?php if (is_single() && comments_open()) : ?>
    <?php wp_enqueue_script('comment_reply'); ?>
  <?php endif; ?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPMTH7B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <div class="barra-sup">
      <div class="barra-sup__logo">
        <img src="" alt="">
      </div>
      <div class="barra-sup__tel">
        <a href="tel:911590325">
          <p><i class="fas fa-phone-alt"></i>911590325</p>
        </a>
      </div>
      <div class="barra-sup__iconos">
        <a href="https://www.instagram.com/ok.humedades/"><i class="fab fa-instagram-square"></i></a>
        <a href="https://www.facebook.com/okhumedades"><i class="fab fa-facebook-square"></i></a>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
          <img src="<?php echo IMAGES; ?>/logo-header.svg" alt="Logo de OK Humedades" width="" height="" class="d-inline-block align-text-top">
        </a>
        <!-- Botón toogle -->
        <div>
          <span id="menu-text">MENÚ</span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <!-- Menú -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarScroll">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 navbar-nav-scroll" style="--bs-scroll-height:600px;">
            <li class="nav-item" style="visibility: hidden;">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Humedades
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="/humedades/humedad-condesacion">Condensación</a></li>
                <li><a class="dropdown-item" href="/humedades/humedad-capilaridad">Capilaridad</a></li>
                <li><a class="dropdown-item" href="/humedades/humedad-filtracion">Filtración</a></li>
                <li><a class="dropdown-item" href="/humedades/infiltracion-lateral">Infiltración lateral</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Consecuencias
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="/humedad-casa">Humedades en casa</a></li>
                <li><a class="dropdown-item" href="/moho-paredes">Moho en paredes</a></li>
                <li><a class="dropdown-item" href="/salud-humedad">Salud y humedad</a></li>
              </ul>
            </li>
            <li class="nav-item" id="diag-boton">
              <!-- id="diag-boton" class="boton"-->
              <a class="nav-link boton" href="/diagnostico-gratis/">Diagnóstico Gratis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://okhumedades.com/blog/">Blog</a>
            </li>
            <li class="nav-item" id="boton-contacto">
              <a class="nav-link" href="#">Contacto</a>
              <div class="contacto-nav">
                <p><a href="mailto:hola@okhumedades.com"><i class="fas fa-envelope"></i> hola@okhumedades.com</a></p>
                <p><a href="https://goo.gl/maps/SUEddFQXu78vprvj7" target="_blank"><i class="fas fa-map-marker-alt"></i> Paseo de la Castellana 91, 28046, Madrid</a></p>
                <p><a href="tel:911590325"><i class="fas fa-mobile-alt"></i> Teléfono: +911590325</a></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <!-- whatsapp pop-up -->
    <div class="wts-pop ">
      <!-- item animate__animated animate__wobble -->
      <a href="https://api.whatsapp.com/send?phone=34602251849&text=Quiero%20consultar%20sobre:">
        <img src="<?php echo IMAGES;?>/whatsapp-brands.png" alt="" class="wts-img">
      </a>
    </div>

    <!-- Modal pop-up -->

  </header>