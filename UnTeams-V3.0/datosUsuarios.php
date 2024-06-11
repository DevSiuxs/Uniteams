<?php
    header("Content-type: application/json");
    require ("database.php");
    $conn= conexionDatabase();
    switch($_GET['accion']){
        case 'agregar':
        $username=mysqli_real_escape_string($conn, $_POST["username"]);
        $email=mysqli_real_escape_string($conn, $_POST["email"]);
        $password=mysqli_real_escape_string($conn, $_POST["password"]);
        $res=mysqli_query($conn, "INSERT INTO users(username, email, password) VALUES ('$username','$email','$password')");
        echo json_encode($res);
        break;
        
        case 'existe':
            $email=mysqli_real_escape_string($conn, $_POST["email"]);
            $res=mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
            $cantidad= mysqli_num_rows($res);
            if($cantidad==1){
                echo '{"res":"repetido"}';
            }else{
                echo '{"res":"norepetido"}';
            }
        break;
    }
?>