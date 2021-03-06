<?php 
session_start();
include("library/class_email_sender.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="Website 212 Asesores C.A.">
    <meta name="author" content="Pedro Zapata">

    <title>212 Asesores C.A.</title>
    <!-- CSS & Bootstrap-->
<nav class="navbar navbar-inverse">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
     <!--favicon-->
    <link rel="shortcut icon" href="favicon.ico">

</head>

</head>
<body>
<div class="main8">
<!--Botonera-->
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
        <span class="icon-bar"></span>                       
      </button>
      <a class="navbar-brand" href="index.html"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle letra-menu" data-toggle="dropdown" data-hover="dropdown" href="#">Acerca de Nosotros<span class="caret"></span></a>        
         <ul class="dropdown-menu">
          <li><a href="valores.html">Nuestros Valores</a></li>
          <li><a href="equipo.html">Nuestro Equipo</a></li>
        </ul>
        </li>
      <li class="dropdown"><a class="dropdown-toggle letra-menu" data-toggle="dropdown" data-hover="dropdown" href="#">Nuestros Servicios<span class="caret"></span></a>        
         <ul class="dropdown-menu">
          <li><a href="patrimonios.html">Manejo de Patrimonios</a></li>
          <li><a href="seguros.html">Seguros Internacionales</a></li>
        </ul></li>
      <li><a class="letra-menu" href="blog.html">Blog</a></li>

       <li class="dropdown"><a class="dropdown-toggle letra-menu" data-toggle="dropdown" data-hover="dropdown" href="#">Contacto <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="citas.html">Agendar Cita</a></li>
          <li><a href="contacto.php">Contáctanos</a></li>
        </ul>
      </li>
        <li class="dropdown"><a class="dropdown-toggle letra-menu" data-toggle="dropdown" data-hover="dropdown" href="#">Client Login <span class="caret"></span></a>        
         <ul class="dropdown-menu">
          <li><a href="https://www.netxinvestor.com/web/netxinvestor/login" target="_blank">Pershing</a></li>
          <li><a href="https://gdcdyn.interactivebrokers.com/sso/Login" target="_blank">Interactive Broker</a></li>
          <li><a href="https://www.bmiportal.com/Account/Login?ReturnUrl=%2f" target="_blank">BMI</a></li>
        </ul>
      </li>

    </ul>
         </div>
  </div>
</nav>
<!--Botonera-->
<!--contenido-->
<div class="container-fluid">
   <div class="row">
    <div class="caja4">
          <div class="col-md-8 col-sm-8">
            <h2 class="titulo">Contacto</h2>

             <!--Email Sending Script -->

        <?php 
      $name="";
      $from="";
      $message="";
        if(isset($_POST['submit'])){

          $name=$_POST['name'];
          $from=$_POST['email'];
          $message=$_POST['comments'];
          $to="info@212asesores.com";
          $prueba="hola"; 
          if($prueba!="hola"){
      echo '<script>alert("Gato Encerrado");</script>';
      }else{    
          include("library/send_email.php");
      }

        //Isset finishes here 
        }
        ?>
         
        <div class="clearfix cnt-wrap">
         <form id="contactform" name="contactform" action="" method="post">
          <div id="result"></div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
                <input type="text" id="name" placeholder="Nombre" name="name" value="<?php echo $name;?>" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
                <input type="text"  id="email" placeholder="Email" name="email" value="<?php echo $from;?>" required>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns">
                <textarea id="comments" name="comments" placeholder="Mensaje" value="<?php echo $message;?>" required></textarea>
              </div>
              
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center columns">             
                <button name="submit" id="submit" class="contact-btn-submit" type="submit">Enviar</button>
              </div> 
            </form>        
        </div>

          </div>
    <div class="t col-md-4 col-sm-4">
    <br>
    <br>
    <br>
    <br>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7846.98259982198!2d-66.8225164261841!3d10.461881620141694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5804fa4b4a43%3A0x673e1f46f03451b8!2sCentro+Gerencial+Loma+Vista!5e0!3m2!1ses!2sve!4v1492302772878" width="100%" height="70%" frameborder="0" style="border:0" allowfullscreen></iframe>
    <p><i class="fa fa-map-pin"></i> Avenida Luis de Camoens, Sector La Guairita
    Centro Gerencial Loma Vista, Oficinas 5-2 y 5-4
    Municipio Sucre, Edo. Miranda</p>
        <p><i class="fa fa-phone"></i> Teléfono (Ccs) : +58 212 514-5633
                          +58 212 514-5634</p>
        <p><i class="fa fa-envelope"></i> E-mail : info@212asesores.com</p>
    </div>
    </div>
</div>    
</div>
<!--Footer-->
<footer class="footer2">
  <div class="container">

    <div class="row">
      <div class="col-md-3 col-sm-6 footerleft ">
        <ul class="footer-ul">
        <li><h4 class="tope">Servicios</h4></li>
        <li><a href="patrimonios.html">Manejo de Patrimonios</a></li>
        <li><a href="seguros.html">Seguros Internacionales</a></li>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <ul class="footer-ul">
        <li><h4 class="tope">Client Login</h4></li>
          <li><a href="https://www.netxinvestor.com/web/netxinvestor/login" target="_blank"> Pershing</a></li>
          <li><a href="https://gdcdyn.interactivebrokers.com/sso/Login" target="_blank"> Interactive Broker</a></li>
          <li><a href="https://www.bmiportal.com/Account/Login?ReturnUrl=%2f" target="_blank">BMI</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <ul class="post">
        <li><h4 class="tope">Contáctanos</h4></li>
        <li><i class="fa fa-map-pin"></i> Avenida Luis de Camoens, Sector La Guairita
    Centro Gerencial Loma Vista, Oficinas 5-2 y 5-4
    Municipio Sucre, Edo. Miranda</li></br>
        <li><i class="fa fa-phone"></i> Phone (Ccs) : +58 212 514-5633
                          +58 212 514-5634
    </li></br>
        <li><i class="fa fa-envelope"></i> E-mail : info@212asesores.com</li></br>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
      <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="#">Social</a></blockquote>
                  <ul class="contact">
                    <li><a class="icon fa fa-facebook-square fa-2x" href="https://www.facebook.com/212asesores/?ref=br_rs" target="blank"><span class="label"></span></a></li>
                    <li><a class="icon fa fa-twitter-square fa-2x" href="https://twitter.com/212asesores" target="blank"><span class="label"></span></a></li>
                    <li><a class="icon fa fa-instagram fa-2x" href="https://www.instagram.com/212asesores/" target="blank"><span class="label"></span></a></li>
                    <li><a class="icon fa fa-linkedin-square fa-2x" href="https://www.linkedin.com/company-beta/16213981/" target="blank"><span class="label"></span></a></li>
                  </ul>

          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>© 2017 - All Rights with 212 Asesores C.A.</p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        <li><a href="patrimonios.html">Manejo de Patrimonios</a></li>
        <li><a href="seguros.html">Seguros Internacionales</a></li>
    </div>
  </div>
</div>
<!--End of footer-->
</div>
<!--Script Zone-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="Navbar.js"></script>
<!--End of script zone-->
</body>
</html>