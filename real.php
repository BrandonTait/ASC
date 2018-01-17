<?php
    require "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SQL Injection demo">
    <meta name="author" content="Francesco Borzì">

    <title>SQL Injection Demo</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header hidden-xs">
        <ul class="nav nav-pills pull-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Standard Login<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="login1.php">Vulnerable</a></li>
              <li><a href="login2.php">Secure</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Numeric Login<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="login3.php">Vulnerable</a></li>
              <li><a href="login4.php">Secure</a></li>
            </ul>
          </li>
          <li class="active dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="real.php">Vulnerable</a></li>
              <li><a href="books2.php">Secure</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="regexp.php">Regular Expression Checker</a></li>
            </ul>
          </li>
        </ul>
		<h3 class="text-muted"><a href="index.php">SQL-Injection Demo</a></h3>
      </div>
      <?php include("mobile-navbar.php"); ?>

      <h3 class="text-center"><span class="label label-danger">
Vulnerable Search</span></h3><br>

      <div class="row">
        <div class="col-sm-10">
          <form class="form-inline" role="form" action="real.php" method="GET">
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail2">Patient ID</label>
              <input type="text" name="Pat_ID" class="form-control" placeholder="Patient ID">
            </div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputPassword2">Patient name</label>
              <input type="text" name="Pat_Name" class="form-control"placeholder="Patient Name">
            </div>
            <button type="submit" class="btn btn-success">Search</button>
          </form>
        </div>
        <div class="col-sm-2">
          <span class="visible-xs">&nbsp;</span>
          <a href="real.php?all=1"><button type="button" class="btn btn-info">All books</button></a>
        </div>
      </div>

      <br>

      <table class="table table-bordered">
        <tr>
          <th>#ID</th>
          <th> Patient Name</th>
          <th>Patient City</th>
        </tr>
      <?php
      if ($_GET['Pat_ID'] || $_GET['Pat_Name'])
        {
            $query = sprintf("SELECT * FROM patients WHERE Pat_ID = '%s' OR Pat_Name = '%s';",
                             $_GET['Pat_ID'],
                             $_GET['Pat_Name']);
        }

		if ($query != null)
		{
			$result = mysqli_query($connection, $query);

			while (($row = mysqli_fetch_row($result)) != null)
			{
				printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row[0], $row[1], $row[6]);
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



      <?php include("footer.php"); ?>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
