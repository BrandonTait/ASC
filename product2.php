<?php
date_default_timezone_set('America/New York');
include 'dbh.inc.php';
include 'comments2.inc.php';
session_start();
if (!isset($_SESSION['id'])) {
  header('location:index.php');
  exit(); // <-- terminates the current script
}
?>
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Prosthetics<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="prosthetic.php">Search</a></li>
              <li><a href="product.php">Reviews</a></li>
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

      <br>

      <div class="banner">
        <center>
        <img src="OTTO BOCK X3 WATERPROOF PROSTHETIC.png" alt="Banner" style="max-width: 100%;
      height: auto;">
      </center>
      </div>

  <h3 class="text-center"><span class="label label-default">Reviews</span></h3><br>
      <hr>
<html>
<head>
<meta charset="UTF-8">
<title>Otto Bock Waterproof Prosthetic</title>

<link href="bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
</head>

<body>




<?php

if (isset($_SESSION['id'])) {
  echo "<form method='GET' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea>
    <br>
    <button type='submit' name='commentSubmit'>Comment</button>
  </form>";
} else {
  echo "You need to be logged in to comment! <br><br>";
}


  getComments($conn);

?>

<?php
    /* echo "<form method='POST' action='".getLogin($conn)."'>
    <input type='text' name='uid' placeholder='username'>
    <input type='password' name='pwd' placeholder='password'>
    <button type='submit' name='loginSubmit'>Login</button>
    </form>"; */

    echo "<form method='POST' action='".userLogout()."'>
    <button type='submit' name='logoutSubmit'>Logout</button>
    </form>";

/*    if (isset($_SESSION['id'])) {
      echo "You are logged in.";
    } else {
      echo "You are not logged in.";
  */
?>

</body>
</html>
