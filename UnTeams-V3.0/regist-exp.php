<?php
    session_start(['usuario']);
    header("Content-type: application/json");
    require ("database.php");
    $conn= conexionDatabase();
    $xp=mysqli_fetch_array($conn, $_POST["xp"]);
    switch($_GET['accion']){
        case 'agregar':
        $correo=$_SESSION['usuario'];
        $xp=mysqli_fetch_array($conn, $_POST["xp"]);
        $res=mysqli_query($conn, "INSERT INTO users (xp) VALUES ($xp) WHERE email='$correo'");
        echo json_encode($res);
        break;
        
        case 'existe':
            $correo=$_SESSION['usuario'];
            $res=mysqli_query($conn, "SELECT xp FROM users WHERE email='$correo'");    
            $cantidad= mysqli_num_rows($res);
            if($cantidad==1){
                echo '{"res":"repetido"}';
            }else{
                echo '{"res":"norepetido"}';
            }
        break;
    }
?>