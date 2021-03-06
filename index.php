<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">
    <title>BPV-regis</title>
    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
    <!-- Custom styles RRA for invoer_stagebedrijf.php -->
    <link href="./css/bpv_form.css" rel="stylesheet">
    <!-- Custom styles RRA for this template -->
    <link href="./css/login-form.css" rel="stylesheet">
    <!-- Custom styles RRA -->
    <link href="./css/bpv-regis.css" rel="stylesheet">
    <!-- Custom styles RRA carrousel -->
    <link href="./css/carrousel.css" rel="stylesheet">
    <!-- Custom styles RRA carrousel -->
    <link href="./css/bpv_show_companies.css" rel="stylesheet">
    <!-- Custom styles RRA carrousel -->
    <link href="./css/bpv_show.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="./index.php?content=home">BPV-regis</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="./index.php?content=home"><span class="glyphicon glyphicon-home"></span>Home</a></li>
        
            <?php 
              ob_start();
              session_start();
              include("userrole_links.php");
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- Begin page content -->
    <div class="container">
      <?php 
          if (isset($_GET["content"]))
          {
            $_SESSION["content"] = $_GET["content"];
            include($_GET["content"].".php"); 
          }
          else {
            include("home.php");
          }
      ?>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">AM1B Blok 3 MBO Utrecht 2017</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="./js/bpv-regis.js"></script>
    <script src="./js/navigation.js"></script>
    
    <?php include("js-selector.php"); ?>
  </body>
</html>
