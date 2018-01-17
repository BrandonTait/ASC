<?php

function setComments($conn) {
  if (isset($_GET['commentSubmit'])){
    $uid = $_GET['uid'];
    $date = $_GET['date'];
    $message = $_GET['message'];

    $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid','$date','$message')";
    $result = mysqli_query($conn,$sql);
  }
}


function getComments($conn) {
  $sql = "SELECT * FROM comments";
  $result = mysqli_query($conn,$sql);
  while($row = $result ->fetch_assoc()){

          printf($row['uid']."<br>");
          printf($row['date']."<br>");
          printf($row['message']."<br><br>");


  }
}
