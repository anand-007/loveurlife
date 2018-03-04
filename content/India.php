<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Bell Bootstrap 4 Theme</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <meta name="description" content="JSMaps - Responsive Javascript Maps - http://jsmaps.io">
  <meta name="author" content="LGLab">

  <!-- Demo scripts -->
  <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet" type="text/css" />
  <script src="../content/lib/jquery/jquery.min.js"></script>

  <style type="text/css">
    html {
      box-sizing: border-box;
    }
    *, *:before, *:after {
      box-sizing: inherit;
    }

    body {
      font-family: 'Droid Sans', sans-serif;
      background:#f2f2f2;
      font-size:14px;
      line-height:21px;
    }

    .container {
      width: 960px;
      margin:20px auto;
    }

    @media only screen and (min-width: 768px) and (max-width: 1000px) {
      .container {
        width: 768px;
      }
    }
    @media only screen and (max-width: 767px) {
      .container {
        width: 420px;
      }
    }
    @media only screen and (max-width: 480px) {
      .container {
        width: 300px;
      }
    }

    a img {
      border:none;
    }

    h1, h2, h3, h4, h5, h6{ 
      font-weight:normal; 
    }
    h1{ 
      font-size:26px; 
      line-height:32px; 
    }
    p, ul{
      margin-bottom:10px;
    }

  </style>
  <!-- End Demo scripts -->

 



  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../content/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../content/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../content/css/style.css" rel="stylesheet">



  <!-- Demo scripts -->
  <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet" type="text/css" />

  <!-- =======================================================
    Theme Name: Bell
    Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<script type="text/javascript">
  function gary(){
    document.getElementById("title").style.display = "none";
  }
</script>

<body onload="gary()">
  <!-- Page Content
    ================================================== -->
  <!-- Hero -->

  <section class="hero">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <a class="hero-brand" href="index.html" title="Home"><img alt="Bell Logo" src="../content/img/logo.png"></a>
        </div>
      </div>

      <div class="col-md-12">
        <h1>
            India Content to be updated.
          </h1>

        <p class="tagline">
          This is a powerful theme with some great features that you can use in your future projects.
        </p>
        <a class="btn btn-full" href="#about">Learn More</a>
      </div>
    </div>

  </section>
  <!-- /Hero -->

  <!-- Header -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.html"><img src="../content/img/logo-nav.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
         <li><a href="#about">Food</a></li>
          <li><a href="#features">Lodging</a></li>
          <li><a href="#portfolio">Places to Visit</a></li>
           <li><a href="#about">Nightlife</a></li>
          <li><a href="#features">Transport</a></li>
          <li><a href="#portfolio">Things to do</a></li>
            <li><a href="#about">Visa</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->

      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
    </div>
  </header>
  <!-- #header -->

  <!-- About -->

  <section class="about" id="about">
    <div class="container text-center">

        <div class="container">

    <!-- Map html - add the below to your page -->
    <div class="jsmaps-wrapper" id="asia-map"></div>
    <!-- End Map html -->
  </div>

  <script type="text/javascript">

    $(function() {
      
      $('#asia-map').JSMaps({
        map: 'asia'
      });

    });
    
  </script>

  </section>
  <!-- /About -->
  <!-- Parallax -->
  <!-- /Parallax -->
  <!-- Features -->

  <section class="features" id="features">
    <div class="container">
    </div>
  </section>
  <!-- /Features -->
  <!-- Call to Action -->

  <section class="cta">
    <div class="container">
    </div>
  </section>
  <!-- /Call to Action -->
  <!-- Portfolio -->

  <section class="portfolio" id="portfolio">
    <div class="container text-center">
    </div>
  </section>
  <!-- /Portfolio -->
  <!-- Team -->

  <section class="team" id="team">
    <div class="container">
    </div>
  </section>
  <!-- /Team -->
  <!-- @component: footer -->

  <footer class="site-footer">
    <div class="bottom">
    </div>
  </footer>
  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>


  <!-- Required JavaScript Libraries -->
  <script src="../content/lib/jquery/jquery-migrate.min.js"></script>
  <script src="../content/lib/superfish/hoverIntent.js"></script>
  <script src="../content/lib/superfish/superfish.min.js"></script>
  <script src="../content/lib/tether/js/tether.min.js"></script>
  <script src="../content/lib/stellar/stellar.min.js"></script>
  <script src="../content/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../content/lib/counterup/counterup.min.js"></script>
  <script src="../content/lib/waypoints/waypoints.min.js"></script>
  <script src="../content/lib/easing/easing.js"></script>
  <script src="../content/lib/stickyjs/sticky.js"></script>
  <script src="../content/lib/parallax/parallax.js"></script>
  <script src="../content/lib/lockfixed/lockfixed.min.js"></script>


    <link href="../content/asia/asia/jsmaps/jsmaps.css" rel="stylesheet" type="text/css" />
  <script src="../content/asia/asia/jsmaps/jsmaps-libs.js" type="text/javascript"></script>
  <script src="../content/asia/asia/jsmaps/jsmaps.js" type="text/javascript"></script>
  <script src="../content/asia/asia/maps/asia.js" type="text/javascript"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="../content/js/custom.js"></script>

  <script src="../content/contactform/contactform.js"></script>

</body>
</html>
