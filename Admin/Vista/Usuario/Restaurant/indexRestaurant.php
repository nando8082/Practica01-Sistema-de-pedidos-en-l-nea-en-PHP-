<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gestion Restaurant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link href="/SistemaPedido/Public/VIsta/assets/img/favicon.png" rel="icon">
  <link href="/SistemaPedido/Public/VIsta/assets/img/favicon.png" rel="icon">
  <link href="/SistemaPedido/Public/VIsta/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/SistemaPedido/Public/VIsta/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/SistemaPedido/Public/VIsta/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/SistemaPedido/Public/VIsta/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/SistemaPedido/Public/VIsta/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/SistemaPedido/Public/VIsta/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/SistemaPedido/Public/VIsta/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/SistemaPedido/Public/VIsta/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.7.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="">Delicious</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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
          <h2>Ingresar</h2>
          <ol>
            <li><a href="">Home</a></li>
            <li>Ingresar</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    

    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Listado d<span>e Productos</span></h2>
        </div>

        <section>
          <div class="container" id="main">
            <div class="row">
              <div class="col-md-12">
                <div class="pull-right">
                  <a href="registrarProducto.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Nuevo</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <form>
        <div class="row">
        <div class="col-md-12">
          <fieldset>
            <legend>Listado de Productos</legend>
            <table class="table table-bordered">
              <thead> 
                <tr>
                  <th>#</th>
                  <th>Nombre</th> 
                  <th>Descripcion</th> 
                  <th>Precio</th>
                  <th>Estado</th> 
                  <th class="text-center">Foto</th>
                </tr>
              </thead> 
              <tbody>
              <?php 
                    include 'conexionBD.php'; 
                    $sql = "SELECT * FROM productos"; 
                    $result = $conn->query($sql); 

                    if ($result->num_rows > 0) {

                        while($row = $result->fetch_assoc()) { 
                            echo "<tr>";
                            echo " <td>" . $row["id"] . "</td>";
                            echo " <td>" . $row['nombre'] ."</td>"; 
                            echo " <td>" . $row['descripcion'] . "</td>"; 
                            echo " <td>" . $row['precio'] . "</td>";
                            echo " <td>" . $row['estado'] . "</td>";
                            echo " <td>" . $row['foto'] . "</td>";
                            echo " <td><a class='btn btn-danger btn-sm' href='/SistemaPedido/Admin/Controladores/Usuario/Restaurant/eliminarProducto.php?id=" . $row['id'] ."'>Eliminar</a></td>";
                            echo " <td><a class='btn btn-success btn-sm' href='../../Controladores/Admin/actualizarCliente.php?id=" . $row['id'] ."'>Actualizar</a></td>";

                            echo "</tr>";
                        }
                    } else {
                        echo "<tr>";
                        echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
                        echo "</tr>";
                    }    
                    $conn->close();
                  
                  ?>
                <tr>
                    <td>#</td>
                    <td>Nombre</td>
                    <td>Descripcion</td> 
                    <td>Precio</td>
                    <td>Estado</td>
                    <td>Foto</td> 
                    <td></td>
                    <td></td>

                  </tr>
              </tbody>
            </table>
          </fieldset>
        </div>
      </div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->


    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Delicious</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/SistemaPedido/Public/VIsta/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/SistemaPedido/Public/VIsta/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/SistemaPedido/Public/VIsta/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/SistemaPedido/Public/VIsta/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/SistemaPedido/Public/VIsta/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/SistemaPedido/Public/VIsta/assets/js/main.js"></script>

</body>

</html>