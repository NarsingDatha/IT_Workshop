<?php
$servername = 'localhost';
$username ='root';
$password="";
$dbname ="phpdata";
//create connection
$con = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$con)
{
  die("connectioin failed:" .mysqli_connect_error());
  }
  else
  {
 echo"connected";
 }
 ?>
