<?php

function conexionDatabase(){
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'unteams-lainuz';
  
  $conn = mysqli_connect($server, $username, $password, $database) or die ("Problemas con la conexión a la base de datos");
  mysqli_set_charset($conn, 'utf8');
  return $conn;
}
?>