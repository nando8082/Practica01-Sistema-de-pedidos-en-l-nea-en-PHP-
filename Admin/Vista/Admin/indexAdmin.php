<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Baratie Admin</title>
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
        <h1><a href="index.html">Baratie</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
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
            <li><a href="index.html">Home</a></li>
            <li>Ingresar</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    

    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Lis<span>tas</span></h2>
        </div>
        <section>
          <div class="container" id="main">
            <div class="row">
              <div class="col-md-12">
                <div class="pull-right">
                  <a href="registrarClienteYRestaurant.html" class="btn btn-primary"><span class="glyphicon glyphicon-plus">
                  </span>Nuevo Cliente/Restaurante</a>
                </div>
              </div>
            </div>
          </div>
        </section>
      <form>
        <div class="row">
          <div class="col-md-12">
            <fieldset>
              <legend>Listado de Clientes</legend>
              <table class="table table-bordered">
                <thead> 
                  <tr>
                    <th>#</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th> 
                    <th>Direccion</th> 
                    <th>Telefono</th>
                    <th>correo_electronico</th> 
                    <th></th>
                    <th></th>
                  </tr>
                </thead> 
                <tbody>
                <?php 
                    include '../../../config/conexionBD.php'; 
                    $sql = "SELECT * FROM clientes"; 
                    $result = $conn->query($sql); 

                    if ($result->num_rows > 0) {

                        while($row = $result->fetch_assoc()) { 
                            echo "<tr>";
                            echo " <td>" . $row["id"] . "</td>";  
                            echo " <td>" . $row["cedula"] . "</td>"; 
                            echo " <td>" . $row['nombre'] ."</td>"; 
                            echo " <td>" . $row['apellido'] . "</td>"; 
                            echo " <td>" . $row['direccion'] . "</td>"; 
                            echo " <td>" . $row['telefono'] . "</td>";
                            echo " <td>" . $row['correo_electronico'] . "</td>";
                            echo " <td><a class='btn btn-danger btn-sm' href='/SistemaPedido/Admin/Controladores/Admin/eliminarCliente.php?id=".$row['id']."'>Eliminar</a></td>";
                            echo " <td><a class='btn btn-success btn-sm' href='actualizarCliente.php?id=".$row['id']."'>Actualizar</a></td>";
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
                    <td>cedula</td>
                    <td>Nombre</td>
                    <td>Apellido</td> 
                    <td>Direccion</td> 
                    <td>Telefono</td>
                    <td>correo_electronico</td> 
                    <td></td>
                    <td></td>

                  </tr>
                </tbody>
              </table>
            </fieldset>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <fieldset>
              <br>
              <legend>Listado de Restaurantes</legend>
              <table class="table table-bordered">
                <thead> 
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Direccion</th> 
                    <th>Telefono</th>
                    <th>correo_electronico</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead> 
                <tbody>
                <?php 
                    include '../../../config/conexionBD.php'; 
                    $sql = "SELECT * FROM restaurantes"; 
                    $result = $conn->query($sql); 

                    if ($result->num_rows > 0) {

                        while($row = $result->fetch_assoc()) { 
                            echo "<tr>";
                            echo " <td>" . $row["id"] . "</td>";
                            echo " <td>" . $row['nombre'] ."</td>"; 
                            echo " <td>" . $row['direccion'] . "</td>"; 
                            echo " <td>" . $row['telefono'] . "</td>";
                            echo " <td>" . $row['correo_electronico'] . "</td>";
                            echo " <td><a class='btn btn-danger btn-sm' href='/SistemaPedido/Admin/Controladores/Admin/eliminarRestaurante.php?id=".$row['id']."'>Eliminar</a></td>";
                            echo " <td><a class='btn btn-success btn-sm' href='actualizarRestaurante.php?id=".$row['id']."'>Actualizar</a></td>";

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
                    <td>Direccion</td> 
                    <td>Telefono</td>
                    <td>correo_electronico</td> 
                    <td></td>
                    <td></td>

                  </tr>
                </tbody>
              </table>
            </fieldset>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <fieldset>
              <br>
              <legend>Listado de Productos</legend>
              <table class="table table-bordered">
                <thead> 
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th> 
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Foto</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead> 
                <tbody>
                <?php 
                    include '../../../config/conexionBD.php'; 
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
                            echo " <td><a class='btn btn-danger btn-sm' href='/SistemaPedido/Admin/Controladores/Usuario/Restaurant/eliminarProducto.php?id" . $row['id'] ."'>Eliminar</a></td>";
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
        
        <div class="row">
          <div class="col-md-12">
            <fieldset>
              <br>
              <legend>Listado de Facturas</legend>
              <table class="table table-bordered">
                <thead> 
                  <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Restaurant</th> 
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead> 
                <tbody>
                <?php 
                    include '../../../config/conexionBD.php'; 
                    $sql = "SELECT * FROM factura"; 
                    $result = $conn->query($sql); 

                    if ($result->num_rows > 0) {

                        while($row = $result->fetch_assoc()) { 
                            echo "<tr>";
                            echo " <td>" . $row["id"] . "</td>";
                            echo " <td>" . $row['nombre'] ."</td>"; 
                            echo " <td>" . $row['restaurant'] . "</td>"; 
                            echo " <td>" . $row['precio'] . "</td>";
                            echo " <td>" . $row['cantidad'] . "</td>";
                            echo " <td>" . $row['estado'] . "</td>";
                            echo " <td><a class='btn btn-danger btn-sm' href='/SistemaPedido/Admin/Controladores/Admin/eliminarCliente.php?id" . $row['id'] ."'>Eliminar</a></td>";
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
                    <td>Restaurant</td>
                    <td>Precio</td> 
                    <td>Cantidad</td>
                    <td>Estado</td> 
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