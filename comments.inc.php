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

          #printf($row['uid']."<br>");
          printf($row['date']."<br>");
          printf($row['message']."<br><br>");


  }
}

function getLogin($conn) {
  if (isset($_POST['loginSubmit'])){
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];


  $sql = "SELECT * FROM user WHERE uid='$uid' AND pwd ='$pwd'";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result) == 1){
      if($row = $result ->fetch_assoc()){
        $_SESSION['id'] = $row['id'];
        header('location:blogindex.php?loginsuccess');
        exit();
      }
  else {
    header('location:blogindex.php?loginfailed');
    exit();
  }
  }
}
}

function userLogout() {
  if (isset($_POST['logoutSubmit'])){
    session_start();
    session_destroy();
    header("Location: index.php");
    exit();
  }
}
