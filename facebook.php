<?php
require_once("php/conexion.php");
$sql="SELECT * FROM wp_posts WHERE post_status='publish' ORDER BY ID desc limit 3";
$res=mysqli_query($con,$sql);

?>
<!DOCTYPE HTML>
<html xml:lang="es" lang="es">

<!-- Basic Page Needs
  ================================================== -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>Hoteles en Ica | El placer de su estadía a precios económicos</title>
<meta name="description" content="El placer de su estadía a precios económicos. Los mejores servicio de Hoteles en Ica la ciudad del sol eterno. Reserve su hotel online."/>
<meta name="keywords" content="hoteles en ica, hotel en ica, hostales en ica, hoteles, ica, hoteles económicos, hoteles baratos, mejores hoteles"/>
<meta name="google-site-verification" content="byHhjxYakce_3lOlQGmKLI74anqgKzb40mAuTSN-MtA" />
<meta name="author" content="KBSoluciones">
<meta name="robots" content="index/follow">
<meta name="distribution" content="web" >
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="plugins/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<link rel="alternate" hreflang="es" href="http://es.hotelesenica.com.pe/" />
<link href="https://plus.google.com/104380114567350513743" rel="publisher"/>
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link class="alt" href="colors/color1.css" rel="stylesheet" type="text/css">
<link href="style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="images/hotelesenica.ico">
<link href="http://hotelesenica.com.pe/images/img-hotelesenica-facebook.png" rel="image_src" />


<!--configuracion para facebook-->
<meta property="og:title" content="Hoteles en Ica - Oficial" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="es_ES">
<meta property="og:url" content="http://hotelesenica.com.pe/index.php" />
<meta property="og:description" content="Sitio web donde encontrarás los mejores servicios de hoteles en Ica y a precios económicos. Visitanos: www.hotelesenica.com.pe" />
<meta property="og:image" content="http://hotelesenica.com.pe/images/img-hotelesenica-facebook.png"/>
<meta property="og:site_name" content="Hoteles en Ica" />
<meta property="fb:admins" content="932549123507669" />
<meta property="fb:app_id" content="924159287620238"/>

<!--fin de configuracion para facebook-->

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@hotelesenica">
<meta name="twitter:title" content="Hoteles en Ica">
<meta name="twitter:description" content="El placer de su estadía a precios económicos. Los mejores servicio de Hoteles en Ica la ciudad del sol eterno. Reserve su hotel online.">
<meta name="twitter:creator" content="@hotelesenica">
<!-- Twitter Summary card images must be at least 200x200px -->
<meta name="twitter:image" content="http://hotelesenica.com.pe/images/img-hotelesenica-facebook.png">
<!--fin de twiter-->



<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->

<!--codigo de seguimiento de google analytics-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-71852916-2', 'auto');
  ga('send', 'pageview');
</script>

<!--fin del codigo-->

<!--script de ventana modal-->
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus();
})
</script>
<!--fin del script modal-->


<!--Quitar el javascript que bloquea-->
<script type="text/javascript" src="small.js"></script>
<!--Fin de quitar el javascript que bloquea-->

</head>

<!--codigo para redes sociales-->
<script type="application/ld+json">
{

 "@context" : "http://schema.org",
 "@type" : "Organization",
 "name" : "Hoteles en Ica",
 "url" : "http://www.hotelesenica.com.pe",

"sameAs" : [
"https://www.facebook.com/Hoteles-en-Ica-Oficial-932549123507669/?ref=hl",
"https://twitter.com/ica_en"
]

}
</script>

<!--fin del codigopara redes sociales-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56ee37fe0c81c52a742ba83b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>

<!--sdk de facebook-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '924159287620238',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!--sdk de facebook-->


<!--contenedor de etiquetas de google-->


<!--[if lt IE 7]>
  <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body"> 
  <!-- Start Site Header -->
  <header class="site-header">
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-8">
            <h1 class="logo"> <a href="index.html"><img src="images/logo.png" alt="Logo"></a> </h1>
          </div>
         <div class="col-md-8 col-sm-6 col-xs-4">
            <ul class="top-navigation hidden-sm hidden-xs">
              <li><a class="lado active" href="index.php">HOME</a></li>
              <li><a class="lado" href="turismo.html">TURISMO EN ICA</a></li>
              <li><a class="lado" href="http://hotelesenica.com.pe/blog">BLOG</a></li>
              <li><a class="lado" href="#" data-toggle="modal" data-target="#contacto">CONTACTO</a></li>
            </ul>
            <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="main-menu-wrapper ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation">
              <ul class="sf-menu">
                <li><a href="hotel-casa-sur/index.html" class="">HOTEL CASA SUR</a></li>
                <li><a href="gran-hotel-ica/index.html" class="">GRAN HOTEL ICA</a></li>
                <li><a href="turismo.html" class="hidden-lg hidden-md ">TURISMO EN ICA</a></li>
                <li><a href="http://hotelesenica.com.pe/blog" class="hidden-lg hidden-md">BLOG</a></li>
                <li><a href="#" data-toggle="modal" data-target="#contacto" class="hidden-lg hidden-md">CONTACTO</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Site Header --> 
  

  <!-- Start Notice Bar -->
  <br>
   <div class="notice-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 titulo">
            <h1>Nuestros Hoteles: Promociones y Ofertas.</h1>
        </div>
        <div class="col-md-3">
        </div>
      </div>
    </div>
  </div>

  <div class="introduccion">
      <div class="container">
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 introduccion-p">
                <p class="p-3">Esta es la mejor oferta de Hoteles en Ica, con el mejor servicio y a unos precios insuperables. Puedes realizar tu reserva en línea y disfrutar del placer de tu estadía en la ciudad del sol eterno.</p>
            </div>
            <div class="col-md-2">
            </div>
          </div>
      </div>
  </div>
  <br>
  <div class="main seccion-1" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row"> 
          <!-- Start Featured Blocks -->
          <div class="featured-blocks clearfix">
            <div class="col-md-6 col-sm-6 featured-block"> <a href="hotel-casa-sur/index.html" class="img-thumbnail"> <img src="images/hoteles/casasur.jpg" alt="Casa Sur" title="Casa Sur"> <strong>Hotel Casa Sur</strong> <span class="more">Ir a </span> </a> </div>
            <div class="col-md-6 col-sm-6 featured-block"> <a href="gran-hotel-ica/index.html" class="img-thumbnail"> <img src="images/hoteles/gran-hotel.jpg" alt="Gran Hotel Ica" title="Gran Hotel Ica"> <strong>Gran Hotel Ica</strong> <span class="more">Ir a</span> </a> </div>
            
          </div>
          <!-- End Featured Blocks --> 
        </div>
      </div>
    </div>
  </div>
  <!-- Fechas de celebración-->
  <div class="notice-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 titulo">
            <h1>Fechas para Celebrar.</h1><br>
        </div>
        <div class="col-md-3">
        </div>
      </div>
    </div>
  </div>
  
  
  
 <!-- ventanas modal-->
 <!-- Modal -->
<div class="modal fade" id="pisco" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Día Nacional del Pisco Sour</h4>
      </div>
      <div class="modal-body">
         <p><img src="images/img-pisco.jpg" align ="left" alt="Pisco Sour"/>La ciudad del Ica celebra el Día Nacional del Pisco Sour con diversas actividades que incluyen la degustación de la bebida de bandera nacional, pasacalles con la participación de danzantes y bodegas artesanales; así como la presentación de cabellos de paso.</p>
        <p>Las celebraciones se da inicio con el Gran Pasacalle desde la Plaza de Armas de Ica, hasta el Campo Ferial con la participación de las principales autoridades, escuelas de danza que a su paso muestran sus originales coreografias, empresas públicas y privadas que con sus carros alegóricos le dan color a esta apertura de la fiesta de nuestro licor de bandera.
        </p>
        <p>Ya en el reciento del Campo Ferial, se da inicio al concurso de danzas con la participación de los jóvenes danzantes de las diferentes escuelas, el espectacular desfile y concurso del caballo de paso peruano. Y el Brindis de la Peruanidad con el tradicional Pisco Sour a cargo de la principales autoridades locales. Seguidamente se da inicio a la presentación de numeros artisticos . Mientras un total de 5 mil copas son repartidas entre los asistentes a las celebraciones.El Pisco es sinonimo de peruanidad y nuestra cálida ciudad de Ica es el hogar del mejor Pisco Peruano.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
 <!--fin de ventanas modal-->
 
  <!-- Modal -->
<div class="modal fade" id="vendimia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Fiesta de la Vendimia de Ica</h4>
      </div>
      <div class="modal-body">
         <p><img src="images/img-vendimia.jpg" align ="left" alt="Vendimia de Ica"/>Ica celebra todos los años el Festival Internacional de la Vendimia, que además de la cosecha de la uva, unifica el arte y la cultura, con espectáculos, presentación de invitados internacionales, desfiles y la coronación de la Reina del festival.</p>
        <p>Su celebración data de 1958 y desde sus inicios tiene como fin promocionar la actividad vitivinícola, de esta ciudad sureña, la más importante de todo el país.
        </p>
        <p>Entre las actividades desarrolladas durante el Festival, destaca la visita que se hace a las diferentes Bodegas Vitivinicolas en la campiña de Ica, donde se puede degustar del Pisco, así como participar de la Tradicional Pisa de la Uva. Dicha visita se hace en compañia de la Reina de la Vendimia y de las Reinas representantes de los diferentes países, ademas de las autoridades y turistas locales. </p>
        <p>En el Campo Ferial, local central de celebración del festival, podrás disfrutar de la variada gastronomía iqueña, la presentación de los espectaculares Caballos de Paso, concurso de danzas y presentaciones musicales por la noche.</p>
        <p>El cierre de la Fiesta de la Uva, que dura una semana, es con el Tradicional Corso, contando con la participación de instituciones públicas y privadas, las empresas que desarrollan sus actividades en nuestra ciudad, escuelas de danza, delegaciones representantes de los diferentes distritos de Ica, quienes desfilan por el centro de la ciudad poniendo la nota de color y júbilo al Festival de la Vendimia.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
 <!--fin de ventanas modal-->
 
   <!-- Modal -->
<div class="modal fade" id="semanasanta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Semana Santa en Ica</h4>
      </div>
      <div class="modal-body">
         <p><img src="images/img-semanasanta.jpg" align ="left" alt="Semana santa en Ica"/>Las celebraciones por las fiestas religiosas en Semana Santa inician el Domingo de Ramos con la salida del Señor del Triunfo desde la Capilla Provisional del Señor de Luren.</p>
         <p>El Lunes Santo sale a recorrer las calles el Señor del Prendimiento que desde la parroquia de Santo Domingo a las 7 de la noche.</p>
<p>La fiesta religiosa en Martes Santo se traslada a la capilla de Cachiche desde donde sale en procesión desde las 8 de la noche el Señor de la Columna que recibe la veneración de los vecinos del lugar.</p>
<p>El miércoles desde las 8 de la noche, de la parroquia San Jerónimo (Jesús María) del cercado de Ica saldrá en procesión el Señor Nazareno. El Jueves Santo no hay procesión por las actividades propias del lavado de pies y las misas. La procesión del Señor de Luren, la más populosa de Ica, saldrá de su capilla provisional a las 7:00 pm el viernes santo.</p>
<p>Finalmente, el domingo, el Señor Resucitado recorrerá las calles de Ica desde las 5:00 de la madrugada.</p>
<p>La Semana Santa en Ica es toda una semana de devoción y procesiones.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

 <!--fin de ventanas modal-->
 
 <div class="modal fade" id="luren" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Señor de Luren</h4>
      </div>
      <div class="modal-body">
         <p><img src="images/img-luren.jpg" align ="left" alt="Señor de Luren"/>Las festividades en honor del Señor de Luren, consisten en una multitudinaria manifestación religiosa iqueña. En Ica, el mes de octubre es mes de devoción y fervor para los pobladores que profesan la religión católica. Cada tercer lunes de octubre, desde las siete de la noche, cuando el calor del desierto empieza a aplacarse, se inicia la multitudinaria procesión del Señor de Luren, una imagen de Cristo crucificado. Se trata del patrón de la ciudad de Ica.</p>
<p>Miles de fieles, venidos desde todas partes, acompañan a la imagen que recorre, durante más de quince horas, las calles de la ciudad. Los iqueños le construyen arcos y alfombras de flores y cantan alegres a su paso. Hay emoción pero, sobre todo, humildad y fe.</p>
<p>La historia del señor de Luren se remonta a la conquista española se dice que existía, en la ermita construida por Rivera en Ica, un Cristo crucificado, pequeño y deteriorado. Ello motivó la necesidad de contar con una imagen más digna, por lo que, luego de algunas negociaciones, los iqueños consiguieron que el Convento Grande de San Francisco de Lima mandase tallar a España una imagen de Cristo en la cruz.</p>
<p>Cuenta una de las versiones más populares de esta historia que el barco que transportaba la imagen fue presa de una terrible tempestad, debiéndose arrojar al mar gran parte de la carga a fin de aligerar la embarcación y evitar el naufragio. Entre las muchas cosas que fueron a parar al agua estaba el gran cajón de madera que contenía al cristo destinado a Lima.</p>

<p>El cajón estuvo en el mar durante mucho tiempo hasta que fue varado por las olas en una playa próxima al puerto del Callao. Las autoridades del convento franciscano de Lima se desinteresaron del cajón, ya que imaginaron el deterioro que la humedad había causado en su contenido. Obligados por la capitanía de puerto del Callao, los monjes trasladaron el cajón al convento, donde quedó olvidado.</p>

<p>Estando en Lima, un sacerdote que venía de Ica, alertado del suceso por los comentarios del público limeño, acordó con los franciscanos la compra del cajón. Éste fue conducido a Pisco y luego a Ica, donde cautivó de inmediato a toda la ciudad; su estado de conservación era intacto y a partir de este hecho se convirtió en el centro en torno del cual, creciendo y extendiéndose por una región cada vez mayor, se constituyó en devoción máxima.</p>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
 
    <!-- Modal -->
<div class="modal fade" id="contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contactos</h4>
      </div>
      <div class="modal-body">
        <form action="php/enviar.php" method="post">
                      <div class="row">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Nombres *:</label>
                            <input type="text" value="" maxlength="100" class="form-control" name="nombre" id="nombre" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Email *:</label>
                            <input type="email" value="" maxlength="100" class="form-control" name="mail" id="mail" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Teléfono *:</label>
                            <input type="text" value="" maxlength="10" class="form-control" name="fono" id="fono" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Solicitud *:</label>
                            <textarea maxlength="5000" rows="10" class="form-control" name="mensaje" id="mensaje" style="height: 138px;" required></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <input type="submit" value="Enviar" class="btn btn-primary" >
                        </div>
                      </div>
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

<script>
  FB.ui({
  method: 'share_open_graph',
  action_type: 'og.likes',
  action_properties: JSON.stringify({
    object:'https://developers.facebook.com/docs/',
  })
}, function(response){
  // Debug response (optional)
  console.log(response);
});
</script>

  <footer class="site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
          <p>&copy; 2015 Hoteles en Ica, Derechos Reservados<br><a href="http://www.kbsoluciones.com.pe">Diseñado por KBSoluciones</a></p>
        </div>
        <div class="copyrights-col-right col-md-6 col-sm-6">
          <div class="social-icons"> <a href="https://www.facebook.com/Hoteles-en-Ica-Oficial-932549123507669/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/hotelesenica" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.instagram.com/hotelesenica/" target="_blank"><i class="fa fa-instagram"></i></a> <a href="https://plus.google.com/104380114567350513743" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="#" target="_blank"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-rss"></i></a> </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
</div>
<script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call --> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin --> 
<script src="js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="js/bootstrap.js"></script> <!-- UI --> 
<script src="js/waypoints.js"></script> <!-- Waypoints --> 
<script src="plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements --> 
<script src="js/init.js"></script> <!-- All Scripts --> 
<script src="plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider --> 
<script src="plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer --> 
<script src="style-switcher/js/jquery_cookie.js"></script> 
<script src="style-switcher/js/script.js"></script> 
<!-- Style Switcher Start -->

</body>
</html>