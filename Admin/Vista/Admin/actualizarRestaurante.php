<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gestion Restaurant Modificar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link href="/SistemadeGestion/Public/vista/assets/img/favicon.png" rel="icon">
  <link href="/SistemadeGestion/Public/vista/assets/img/favicon.png" rel="icon">
  <link href="/SistemadeGestion/Public/vista/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/SistemadeGestion/Public/vista/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/SistemadeGestion/Public/vista/assets/<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Delicious Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/SistemadeGestion/Public/vista/assets/img/favicon.png" rel="icon">
  <link href="/SistemadeGestion/Public/vista/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/SistemadeGestion/Public/vista/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/SistemadeGestion/Public/vista/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/SistemadeGestion/Public/vista/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/SistemadeGestion/Public/vista/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/SistemadeGestion/Public/vista/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/SistemadeGestion/Public/vista/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/SistemadeGestion/Public/vista/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+593 984756443</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Lunes-Domingo: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">Delicious</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/SistemadeGestion/Public/vista/index.html">Inicio</a></li>
          <li><a class="nav-link scrollto" href="/SistemadeGestion/Public/vista/index.html#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="/SistemadeGestion/Public/vista/index.html#specials">Especiales</a></li>
          <li><a class="nav-link scrollto" href="/SistemadeGestion/Public/vista/index.html#events">Eventos</a></li>
          <li><a class="nav-link scrollto" href="/SistemadeGestion/Public/vista/index.html#gallery">Galeria</a></li>
          <li><a class="nav-link scrollto" href="/SistemadeGestion/Public/vista/index.html#contact">Contactanos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/SistemaPedido/Config/Cerrarsesion.php" class="book-a-table-btn scrollto">Salir</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Registro</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Registro</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Actualizar<span> Restaurant</span></h2>
        </div>

        <form id="formulario" method="POST" action="../Controladores/Registrar.php" role="form" >
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="cedula" class="form-control" id="cedula" placeholder="Cedula" data-rule="minlen:10" data-msg="Ingrese 10 numeros">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingrese minimo 4 letras">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirrecion" data-rule="minlen:4" data-msg="Ingrese minimo 4 letras">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="numero" id="numero" placeholder="Numero Contacto" data-rule="minlen:10" data-msg="Ingrese 10 numeros">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" data-rule="email" data-msg="Ingrese un correo valido">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña" data-rule="minlen:10" data-msg="Ingrese 5 caracteres">
              <div class="validate"></div>
            </div>
          </div>
          
          <div class="text-center">
            <input type="submit" id="crear" name="crear" value="Registrar"/>
            <a href="indexAdmin.php" class="btn btn-default">Cancelar</a>
          </div>
        </form>


      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="container">
      <h3>Baratie</h3>
      <p>Un lugar placentero para deleitarte con los mejores manjares culinarios.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Baratie</span></strong>. Todos los derechos reservados
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/SistemadeGestion/Public/vista/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/SistemadeGestion/Public/vista/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/SistemadeGestion/Public/vista/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/SistemadeGestion/Public/vista/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/SistemadeGestion/Public/vista/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/SistemadeGestion/Public/vista/assets/js/main.js"></script>

</body>

</html>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/SistemadeGestion/Public/vista/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/SistemadeGestion/Public/vista/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/SistemadeGestion/Public/vista/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/SistemadeGestion/Public/vista/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/SistemadeGestion/Public/vista/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+593 984756443</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Lunes-Domingo: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">Baratie</a></h1>

      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/SistemadeGestion/Public/vista/index.html">Inicio</a></li>
          <li><a class="nav-link scrollto" href="/SistemadeGestion/Public/vista/index.html#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="/SistemadeGestion/Public/vista/index.html#specials">Especiales</a></li>
          <li><a class="nav-link scrollto" href="/SistemadeGestion/Public/vista/index.html#events">Eventos</a></li>
          <li><a class="nav-link scrollto" href="/SistemadeGestion/Public/vista/index.html#gallery">Galeria</a></li>
          <li><a class="nav-link scrollto" href="/SistemadeGestion/Public/vista/index.html#contact">Contactanos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/SistemadeGestion/Config/Cerrarsesion.php" class="book-a-table-btn scrollto">Salir</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ingresar</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Ingresar</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->


    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Actualizar<span> Productos</span></h2>
        </div>

        <div class="row">
          <div class="col-md-12">
            <form action="/SistemaPedido/Admin/Controladores/Usuario/Restaurant/actualizarProducto.php" method="POST"  enctype="multipart/form-data">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Nombre Producto</label>
                  <input type="text" class="form-control" name="nombre" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Descripcion</label>
                    <textarea class="form-control" name="descripcion" id="" cols="20" required></textarea>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="">Precio</label>
                    <input type="text" class="form-control" name="precio" placeholder="0.00" required>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="foto" required>
                  </div>
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Actualizar</button>
              <a href="/SistemaPedido/Admin/Vista/Usuario/Restaurant/indexRestaurant.php" class="btn btn-default">Cancelar</a>
            </form>
          </div>
        </div>

        

      </div>
    </section><!-- End Book A Table Section -->


    <section id="book-a-table" class="book-a-table">
      
    </section>


    <section id="book-a-table" class="book-a-table">
      <table style="width:100%"> 
        <tr>
            <th>Nombre</th> 
            <th>Descripcion</th> 
            <th>Precio</th>
            <th>Estado</th> 
            <th>Foto</th>
        </tr>

        <?php include '../../../config/conexionBD.php'; 
        $sql = "SELECT 'id', 'nombre', 'descripcion','precio', 'estado', 'foto' 
        FROM `productos`, `restaurantes` WHERE restaurant_id = restaurantes.id"; 

        $result = $conn->query($sql); 

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) { 
                echo "<tr>"; 
                echo " <td>" . $row['id'] ."</td>"; 
                echo " <td>" . $row['nombre'] ."</td>"; 
                echo " <td>" . $row['descripcion'] . "</td>"; 
                echo " <td>" . $row['precio'] . "</td>"; 
                echo " <td>" . $row['estado'] . "</td>"; 
                echo " <td>" . $row['foto'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr>";
            echo " <td colspan='7'> No existen productos registrados en el sistema </td>";
            echo "</tr>";
        }    
        $conn->close();

    ?>
    </table>
    </section><!-- End Book A Table Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Baratie</h3>
      <p>Un lugar placentero para deleitarte con los mejores manjares culinarios.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Baratie</span></strong>. Todos los derechos reservados
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/SistemadeGestion/Public/vista/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/SistemadeGestion/Public/vista/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/SistemadeGestion/Public/vista/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/SistemadeGestion/Public/vista/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/SistemadeGestion/Public/vista/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/SistemadeGestion/Public/vista/assets/js/main.js"></script>

</body>

</html>