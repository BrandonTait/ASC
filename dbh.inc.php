<?php

$conn = mysqli_connect('localhost','root','root','sqli');

if(!$conn){
  die("Connetion failed: ".mysqli_connect_error());
}
