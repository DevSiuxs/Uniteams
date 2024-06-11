<?php
session_start(['usuario']);
if (!isset($_SESSION['usuario'])) {
    header("location: init.html");
    exit(0);
}
?>
<?php
if (isset($_POST['submitRatingStar'])) {
    require ("database.php");
    $conn= conexionDatabase();
    $calif=mysqli_real_escape_string($conn, $_POST['rate']);
    $correo=$_SESSION['usuario'];
    $res=mysqli_query($conn, "SELECT email_user FROM curso_sass WHERE email_user='$correo'");
    $cantidad=mysqli_num_rows($res);
    if ($cantidad==1) {
        header("location: dashboard.php");
    }else{        
        $res=mysqli_query($conn, "INSERT INTO curso_sass (star_rate, email_user) VALUES ('$calif','$correo')");
        header("location: dashboard.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/StyleM_V.css">
    <link rel="stylesheet" href="Styles/styleCuest.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="js/jquery.rating.pack.js"></script>
    <script src="Scripts/selector.js"></script>
    <title class="challege">SASS-Cuest</title>
</head>
<script>
    $(document).ready(function(){
        $('input.star').rating();
    });
    </script>
<body>
    <header>
        <div class="area"></div><nav class="main-menu">
            <section class="dataC">
                <ul>
                    <li class="has-subnav">
                        <a href="#">
                            <i class="fa fa_laptop fa-2x"></i>
                            <span class="nav-text">
                                Curso
                            </span>
                        </a>
                    </li>
                    <li class="has-subnav">
                        <a href="#">
                            <i class="fa fa_laptop fa-2x"></i>
                            <img src="imagenes/Barco_corregido.png" alt="">
                            <progress bar value="75" max="100"></progress bar>
                        </a>
                    </li>
                </ul>
        
            </section>
                <ul>
                    <li class="has-subnav">
                        <a href="dashboard.php">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                Dashboard
                            </span>
                        </a>
                    </li>
                </ul>
               
                    <ul class="logout">
                        <li>
                            <a href="logout.php">
                                 <i class="fa fa-power-off fa-2x"></i>
                                <span class="nav-text">
                                    Logout
                                </span>
                            </a>
                        </li>  
                    </ul>
                    </nav>
    </header>
    <main>
        <h3 class="title">¿A qué herramienta de estilo se asemeja SASS?</h3>
        <form action="#" class="form">
            <nav>
                <table class="cuest">
                    <button id="a" ><tr onclick="Eva(true);">
                        <td class="opcion" >A</td>
                        <td class="answer" id="ansa">     CSS y Java Script   </td>
                    </tr>
                    <tr onclick="Eva(false);">
                        <td class="opcion">B</td>
                        <td class="answer" id="ansb">    HTML y CSS   </td>
                    </tr>
                    <tr onclick="Eva(false);">
                        <td class="opcion">C</td>
                        <td class="answer" id="ansc">    REACT JS Y RUBY    </td>
                    </tr>
                </table>
            </nav>
        </form> 
    </main>
    <footer class="footer">
            <div class="row">
                <div id="content" class="col-lg-12">
                    <form action="SassCuest.php" method="post">
                    <h6 id="text">Por favor califica del 1 al 5 que tal te pareció este curso</h6>
                        <div class="star_content">
                            <input name="rate" value="1" type="radio" class="star"/> 
                            <input name="rate" value="2" type="radio" class="star"/> 
                            <input name="rate" value="3" type="radio" class="star"/> 
                            <input name="rate" value="4" type="radio" class="star"/> 
                            <input name="rate" value="5" type="radio" class="star"/>
                        </div>
                        <button type="submit" name="submitRatingStar" id="btn-Enviar">Enviar</button>
                    </form>
                </div>
            </div>
    </footer>
</body>
</html>