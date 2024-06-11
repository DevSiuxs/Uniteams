<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: init.html"); 
  exit(0);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/sDash.css">
    <link rel="stylesheet" href="Styles/menu.css">
    <link rel="stylesheet" href="Styles/Content2.css">
    <link rel="stylesheet" href="Styles/reset.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
      <div class="caja">
      <h1 class="img"><img src="imagenes/Barco_corregido.png"></h1>
          <nav>
              <ul>
                <li><a href="perfil.php">Mi Perfil</a></li>
                  <li><a href="logout.php">Cerrar Sesión</a></li>
              </ul>
          </nav>
      </div>
    </header>
    <main>
          <div class='container'>
            <ul>
              <li>
                <a class='normal' href='PilasVideo.html'>
                  <img src="imagenes/1.svg" alt="">
                </a>
                <div class='info'>
                  <h3>Pilas</h3>
                  <p>¿Cómo programar una pila en Python?</p>
                </div>
              </li>
              <li>
                <a class='normal' href='ListasVideo.html'>
                  <img src="imagenes/2.svg" alt="">
                </a>
                <div class='info' id="C2">
                  <h3>Listas</h3>
                  <p>Estructura de una lista</p>
                </div>
              </li>
              <li>
                <a class='normal' href='ColasVideo.html'>
                  <img src="imagenes/3.svg" alt="">
                </a>
                <div class='info'>
                  <h3>Estructuras tipo "Colas"</h3>
                  <p>Estructura de una cola</p>
                </div>
              </li>
              <li>
                <a class='normal' href='ArbolesVideo.html'>
                  <img src="imagenes/4.svg" alt="">
                </a>
                <div class='info'>
                  <h3>Árboles (Estructuras de datos)</h3>
                  <p>Árbol en c++ </p>
                </div>
              </li>
              <li>
                <a class='normal' href='GrafosVideo.html'>
                  <img src="imagenes/5.svg" alt="">
                </a>
                <div class='info'>
                  <h3>Grafos</h3>
                  <p>¿Cómo crear grafos?</p>
                </div>
              </li>
              <li>
                <a class='normal' href='SassVideo.html'>
                  <img src="imagenes/6.svg" alt="">
                </a>
                <div class='info'>
                  <h3>SASS (Víctor Robles)</h3>
                  <p>SASS en 15 minutos</p>
                </div>
              </li>
              <li>
                <a class='normal' href='HTMLVideo.html'>
                  <img src="imagenes/7.svg" alt="">
                </a>
                <div class='info'>
                  <h3>HTML (Víctor Robles)</h3>
                  <p>HTML en 15 minutos</p>
                </div>
              </li>
              <li>
                <a class='normal' href='JSVideo.html'>
                 <img src="imagenes/8.svg" alt="">
                </a>
                <div class='info' id="6">
                  <h3>Java Script</h3>
                  <p>Java Script en 15 minutos</p>
                </div>
              </li>
        </div>          
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

<script >
  // - Noel Delgado | @pixelia_me
  
  const nodes = [].slice.call(document.querySelectorAll("li"), 0);
  const directions = { 0: "top", 1: "right", 2: "bottom", 3: "left" };
  const classNames = ["in", "out"].
  map(p => Object.values(directions).map(d => `${p}-${d}`)).
  reduce((a, b) => a.concat(b));
  
  const getDirectionKey = (ev, node) => {
    const { width, height, top, left } = node.getBoundingClientRect();
    const l = ev.pageX - (left + window.pageXOffset);
    const t = ev.pageY - (top + window.pageYOffset);
    const x = l - width / 2 * (width > height ? height / width : 1);
    const y = t - height / 2 * (height > width ? width / height : 1);
    return Math.round(Math.atan2(y, x) / 1.57079633 + 5) % 4;
  };
  
  class Item {
    constructor(element) {
      this.element = element;
      this.element.addEventListener("mouseover", ev => this.update(ev, "in"));
      this.element.addEventListener("mouseout", ev => this.update(ev, "out"));
    }
  
    update(ev, prefix) {
      this.element.classList.remove(...classNames);
      this.element.classList.add(
      `${prefix}-${directions[getDirectionKey(ev, this.element)]}`);
  
    }}
  
  
  nodes.forEach(node => new Item(node));
</script>
</html>