<?php
date_default_timezone_set('America/New York');
include 'dbh.inc.php';
include 'comments.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>TITLE</title>

<link href="style.css" rel="stylesheet">
</head>

<body>

  <div class="banner">
    <center>
    <img src="simple-circle-wallpaper-1920x1200.jpg" alt="Banner" style="max-width: 100%;
  height: auto;">
  </center>
  </div>

<?php
  echo "<form method='GET' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea>
    <br>
    <button type='submit' name='commentSubmit'>Comment</button>
  </form>";

  getComments($conn);

?>

</body>
</html>
