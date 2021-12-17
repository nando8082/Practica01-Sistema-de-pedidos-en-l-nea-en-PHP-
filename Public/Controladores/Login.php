<?php
 session_start();
 include 'conexionBD.php';
 $usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;
 echo $usuario;
 $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
 echo $contrasena;

    $sql = "SELECT * FROM usuario WHERE correo_electronico = '$usuario' and 
    contrasena = '$contrasena'";
    

    $sql1 = "SELECT * FROM clientes WHERE correo_electronico = '$usuario' and 
    contrasena = '$contrasena'";

    $sql2 = "SELECT * FROM restaurantes WHERE correo_electronico = '$usuario' and 
    contrasena = '$contrasena'";
    

    $result = $conn->query($sql);
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2); 
    
    if ($result->num_rows > 0) { 
        $_SESSION['isLogged'] = TRUE; 
        header("Location: /SistemaPedido/Admin/Vista/Admin/indexAdmin.php"); 
    } else { 
        if ($result1->num_rows > 0) { 
            $_SESSION['isLogged'] = TRUE; 
            header("Location: /SistemaPedido/Admin/Vista/Usuario/Cliente/indexCliente.php"); 
        } else { 
            if ($result2->num_rows > 0) { 
                $_SESSION['isLogged'] = TRUE; 
                header("Location: /SistemaPedido/Admin/Vista/Usuario/Restaurant/indexRestaurant.php"); 
            } else { 
                header("Location: /SistemaPedido/Public/VIsta/innerIngresar.html"); 
            } 
        } 
    } 
    $conn->close(); 
?>

