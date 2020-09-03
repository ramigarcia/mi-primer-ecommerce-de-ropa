<?php
  session_start();    
  error_reporting(0);
  $varsesion = $_SESSION['usuario'];

  if($varsesion == null || $varsesion = ''){
    echo '<script>alert("Has cerrado tu sesión. Debes iniciar sesión otra vez para poder comprar");window.history.go(-1);</script>';
    die();
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/style.css">
  <title>E-commerce</title>
</head>
<body>
  <header id="initiation">
    <img src="img/hamburger.svg" alt="" class="hamburger">
    <img src="img/x.svg" alt="" class="hamburger-x">
    <nav class="menu-navegacion menu">
      <ul>
        <li><a class="elements" href="../private/log-out.php"><i class="fas fa-sign-out-alt"></i></a></li>
        <li><a class="elements" href="#clothes"><i class="fas fa-tshirt"></i> Ropa</a></li>
        <li><a class="elements" href="#"><i class="fas fa-shopping-cart"></i> Carrito</a></li>
        <li><a href="#" id="enlace-nosotros" class="elements user"><i class='bx bxs-user'></i> <?php echo $_SESSION['usuario']?> </a></li>
        <li><a class="elements" href="#initiation"><i class="fas fa-store"></i> Inicio</a></li>
      </ul>
    </nav>
    <div class="hero">
      <div class="hero-container">
        <h1 class="title">ROPA BORA BORA</h1>
        <div class="description">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti repudiandae quas animi aspernatur quis natus ipsum consectetur repellat doloribus suscipit!
          </p>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section class="container">
      <section class="recommendation">
        <div class="row-container">
          <div class="section-header" id="clothes">
            <h1>Ofertas</h1>
            <a href="#">Ver todas</a>
          </div>
          <div class="articles">
            <div class="article-image-text">
                <img src="img/clothes-girl.jpg">
              <div class="linea-article"></div>
              <div class="info-prod">
                <p>precio: <span>$550</span></p>
                <b>Ropa de marca</b> <br>
                <button class="buy" onclick="agregarProducto('Remera Gucci','53')"><i class="fas fa-shopping-cart"></i> Agregar</button>
              </div>
            </div>
            <div class="article-image-text">
              <figure>
                <img src="img/clothes-girl.jpg">
              </figure>
              <div class="linea-article"></div>
              <p>precio: <span>$550</span></p>
              <b>Ropa de marca</b> <br>
              <button class="buy" onclick="agregarProducto('Remera Gucci','53')"><i class="fas fa-shopping-cart"></i> Agregar</button>
            </div>
            <div class="article-image-text">
              <figure>
                <img src="img/clothes-girl.jpg">
              </figure>
              <div class="linea-article"></div>
              <p>precio: <span>$550</span></p>
              <b>Ropa de marca</b> <br>
              <button class="buy" onclick="agregarProducto('Remera Gucci','53')"><i class="fas fa-shopping-cart"></i> Agregar</button>
            </div>
            <div class="article-image-text">
              <figure>
                <img src="img/clothes-girl.jpg">
              </figure>
              <div class="linea-article"></div>
              <p>precio: <span>$550</span></p>
              <b>Ropa de marca</b> <br>
              <button class="buy" onclick="agregarProducto('Remera Gucci','53')"><i class="fas fa-shopping-cart"></i> Agregar</button>
            </div>
            <div class="article-image-text">
              <figure>
                <img src="img/clothes-girl.jpg">
              </figure>
              <div class="linea-article"></div>
              <p>precio: <span>$550</span></p>
              <b>Ropa de marca</b> <br>
              <button class="buy" onclick="agregarProducto('Remera Gucci','53')"><i class="fas fa-shopping-cart"></i> Agregar</button>
            </div>
            <div class="article-image-text">
              <figure>
                <img src="img/clothes-girl.jpg">
              </figure>
              <div class="linea-article"></div>
              <p>precio: <span>$550</span></p>
              <b>Ropa de marca</b> <br>
              <button class="buy" onclick="agregarProducto('Remera Gucci','53')"><i class="fas fa-shopping-cart"></i> Agregar</button>
            </div>
            <div class="article-image-text">
              <figure>
                <img src="img/clothes-girl.jpg">
              </figure>
              <div class="linea-article"></div>
              <p>precio: <span>$550</span></p>
              <b>Ropa de marca</b> <br>
              <button class="buy" onclick="agregarProducto('Remera Gucci','53')"><i class="fas fa-shopping-cart"></i> Agregar</button>
            </div>
            <div class="article-image-text">
              <figure>
                <img src="img/clothes-girl.jpg">
              </figure>
              <div class="linea-article"></div>
              <p>precio: <span>$550</span></p>
              <b>Ropa de marca</b> <br>
              <button class="buy" onclick="agregarProducto('Remera Gucci','53')"><i class="fas fa-shopping-cart"></i> Agregar</button>
            </div>
            <div class="article-image-text">
              <figure>
                <img src="img/clothes-girl.jpg">
              </figure>
              <div class="linea-article"></div>
              <p>precio: <span>$550</span></p>
              <b>Ropa de marca</b> <br>
              <button class="buy" onclick="agregarProducto('Remera Gucci','53')"><i class="fas fa-shopping-cart"></i> Agregar</button>
            </div>
            <div class="article-image-text">
              <figure>
                <img src="img/clothes-girl.jpg">
              </figure>
              <div class="linea-article"></div>
              <p>precio: <span>$550</span></p>
              <b>Ropa de marca</b> <br>
              <button class="buy" onclick="agregarProducto('Remera Gucci','53')"><i class="fas fa-shopping-cart"></i> Agregar</button>
            </div>
          </div>
        </div>
      </section>
    </section>
  </main>
  <footer id="contacto">
    <div class="footer">
      <a href="#">Terminos y Condiciones</a>
      <em>
        Desarrollado por <a href="#">Ramiro Garcia</a>
      </em>
      <div class="social-media">
        <a href="#" class="social-media-icon">
          <i class='bx bxl-whatsapp'></i>
        </a>
        <a href="#" class="social-media-icon">
          <i class='bx bxl-instagram' ></i>
        </a>
        <a href="#" class="social-media-icon">
          <i class='bx bxl-facebook'></i>
        </a>
      </div>
    </div>
  </footer>
  <script src="js/menu.js"></script>
</body>
</html>