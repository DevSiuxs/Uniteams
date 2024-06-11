<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location:init.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/menu.css">
    <link rel="stylesheet" href="Styles/Content2.css">
    <link rel="stylesheet" href="Styles/reset.css">
    <link rel="stylesheet" href="Styles/styleProfile.css">
    <title>Perfil-Usuario</title>
</head>
<body>
    <header>
        <div class="caja">
            <h1 class="img"><img src="imagenes/Barco_corregido.png"></h1>
            <nav>
                <ul>
                    <li><a href="perfil.php">Mi Perfil</a></li>
                    <li><a href="dashboard.php"> Mis Cursos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="profile">
        <section class="user">
            <img src="imagenes/10.svg" alt="" class="icon">
            <h2 class="username"><strong><?php echo $_SESSION['usuario']; ?> </strong></h3>
        </section>
        <h3>Insignias</h3>
        <section class="insignias">
            <div class="ins">
                <div class='wrapper'>
                    <div class='carousel'>
                      <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            ☢️
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Entraste a Uniteams</p>
                            <p class="descrip">Los grandes comienzan de poco en poco</p>
                        </div>
                      </div>
                      <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            🤪
                        </div>
                        <div class='carousel__item-body'>
                          <p class='title'>Te Registraste</p>
                          <p class="descrip">por fin somos un equipo</p>
                        </div>
                      </div>
                      <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            🌯
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Completaste tu visita</p>
                            <p class="descrip">Manos a la obra</p>
                        </div>
                      </div>
                      <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            👾
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Apilación</p>
                            <p class="descrip">Completaste el curso de Pilas</p>
                        </div>
                      </div>
                      <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            👽
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Presente!</p>
                            <p class="descrip">Completaste el Curso de Listas</p>
                        </div>
                      </div>
                      <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            🐻
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Uno detrás de otro</p>
                            <p class="descrip">Completaste el Curso de Colas</p>
                        </div>
                      </div>
                      
                      </div>
                    </div>
                  </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
                <ul>
                <li>
                    <a href="#">
                    <i class="fab fa-facebook-f icon"></i>    </a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter icon"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-linkedin-in icon"></i></a></li>
                <li>
                    <a href="#"><i class="fab fa-google-plus-g icon"></i></a></li>
                </ul>
            </div>
    </footer>
</body>
</html>