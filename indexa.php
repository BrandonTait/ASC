<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SQL Injection demo">
    <meta name="author" content="JJISRM">

    <title>Prostec Professional</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header hidden-xs">
        <ul class="nav nav-pills pull-right">
          <li class="dropdown">
            <a href="index.php">Logout</b></a>

          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Prosthetics<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="prosthetic.php">Search</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Orders<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="oup2.php">Balance Update</a></li>
            </ul>
          </li>
            </ul>
          </li>
        </ul>

        <h3 class="text-muted"><a href="indexa.php"> Prostec Professional</a></h3>
      </div>
      <?php include("mobile-navbar2.php"); ?>



<!--
   <div class="jumbotron">
        <h1>SQL Injection</h1>
        <h2>Demonstration Project</h2>
        <h3>The code of this demo is available at:</h3>
        <h2 class="hidden-xs"><a href="https://github.com/ShinDarth/sql-injection-demo">github.com/ShinDarth/sql-injection-demo</a></h2>
        <p class="lead visible-xs"><a href="https://github.com/ShinDarth/sql-injection-demo">github.com/ShinDarth/sql-injection-demo</a></p>
      </div>
-->
    <div class="banner">
      <center>
      <img src="images\simple-circle-wallpaper-1920x1200.jpg" alt="Banner" style="max-width: 100%;
    height: auto;">
    </center>
    </div>



      <?php include("footer.php"); ?>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
