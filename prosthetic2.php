<?php
    require "db_connect.php";
    session_start();
    if (!isset($_SESSION['id'])) {
      header('location:index.php');
      exit(); // <-- terminates the current script
    }
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

      <h3 class="text-center"><span class="label label-info">Prosthetic Search</span></h3><br>

      <div class="row">
        <div class="col-sm-10">
          <form class="form-inline" role="form" action="prosthetic2.php" method="GET">
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail2">ID</label>
              <input type="text" name="id" class="form-control" placeholder="Prosthetic ID #">
            </div>
            <!--
            <div class="form-group">
              <label class="sr-only" for="exampleInputPassword2">Book author</label>
              <input type="text" name="function" class="form-control"placeholder="Prosthetic Function">
            </div>
            -->
            <button type="submit" class="btn btn-success">Search</button>
          </form>
        </div>

      </div>

      <br>

      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Function</th>
        </tr>
      <?php
     if ($_GET['id'])
        {
            $query = sprintf("SELECT * FROM prosthetic WHERE id = '%s'",
                             $_GET['id']);
        }

		if ($query != null)
		{
			$result = mysqli_query($connection, $query);

			while (($row = mysqli_fetch_row($result)) != null)
			{
				printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row[0], $row[1], $row[5]);
			}
		}
      ?>
      </table>

      <hr>
      <div class="row">
        <div class="col-sm-12">
          <h4>Query Executed:</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="highlight">
            <pre><?= $query ?></pre>
          </div>
        </div>
      </div>

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
if ($_GET['all'] == 1)
{
    $query = "SELECT * FROM books;";
}
else if ($_GET['title'] || $_GET['author'])
{
    $query = sprintf("SELECT * FROM books WHERE title = '%s' OR author = '%s';",
                             $_GET['title'],
                             $_GET['author']);
}

if ($query != null)
{
    $result = mysqli_query($connection, $query);

    while (($row = mysqli_fetch_row($result)) != null)
    {
        printf("&lt;tr&gt;&lt;td&gt;%s&lt;/td&gt;&lt;td&gt;%s&lt;/td&gt;&lt;td&gt;%s&lt;/td&gt;&lt;/tr&gt;", $row[0], $row[1], $row[2]);
    }
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
Pass <strong>' UNION SELECT * FROM users WHERE '1'='1</strong> as author to get all users data.<br>
The same result is obtained by using url <a href="books1.php?author='+UNION+SELECT+*+FROM+users+WHERE '1'='1"><strong>books1.php?author='+UNION+SELECT+*+FROM+users+WHERE '1'='1</strong></a>.
            </pre>
          </div>
        </div>
      </div>
-->
      <br>

      <?php include("footer.php"); ?>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
