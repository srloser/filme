<?php

$site = '127.0.0.1/Filmes/';


$nome_banco = "filme";

$con = mysqli_connect("127.0.0.1","root","",$nome_banco);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,$nome_banco);

?>

