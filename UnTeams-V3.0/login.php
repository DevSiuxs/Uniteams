<?php
require ("database.php");
$conn= conexionDatabase();

$usuario= mysqli_real_escape_string($conn, $_POST['correo']);
$password= mysqli_real_escape_string($conn, $_POST['password']);

$res=mysqli_query($conn, "SELECT email, password FROM users WHERE email='$usuario' AND password='$password'");

$cantidad= mysqli_num_rows($res);
if($cantidad ==1){
    session_start();
    $_SESSION['usuario']=$usuario;
    echo"Correcta";
}else{
    echo"Incorrecta";
}
?>