<?php
    require "db_connect.php";
    include 'dbh.inc.php';
    include 'comments.inc.php';
    session_start();
?>
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
            </ul>
          </li>
        </ul>

        <h3 class="text-muted"><a href="index.php"> Prostec Professional</a></h3>
      </div>
      <?php include("mobile-navbar.php"); ?>


      <?php
          echo "<form method='POST' action='".getLogin($conn)."'>
          <input type='text' name='uid' placeholder='username'>
          <input type='password' name='pwd' placeholder='password'>
          <button type='submit' name='loginSubmit'>Login</button>
          </form>";

          echo "<form method='POST' action='".userLogout()."'>
          <button type='submit' name='logoutSubmit'>Logout</button>
          </form>";

          if (isset($_SESSION['id'])) {
            echo "You are logged in.";
          } else {
            echo "You are not logged in.";
          }
      ?>



<!--
      <hr>
      <div class="row">
        <div class="col-sm-12">
          <h4>PHP Code:</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="highlight">
            <pre>
$username = $_POST['username'];
$password = $_POST['password'];

$query = sprintf("SELECT * FROM users WHERE username = '%s' AND password = '%s';",
                 $username,
                 $password);

$result = mysqli_query($connection, $query);

if ($result->num_rows > 0)
{
    echo "Authenticated as " . $username;

    // ...
    // $_SESSION['logged_user'] = $username;
    // ...
}
else
{
    echo "Wrong username/password combination.";
}
            </pre>
          </div>
        </div>
      </div>

      <hr>
      <div class="row">
        <div class="col-sm-12">
          <h4>Vulnerability:</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="highlight">
            <pre>
Pass <strong>1' OR '1'='1</strong> as password to get authenticated.
            </pre>
          </div>
        </div>
      </div>

      <br>
    -->

      <?php include("footer.php"); ?>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
