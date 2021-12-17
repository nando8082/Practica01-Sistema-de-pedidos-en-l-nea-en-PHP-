<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Usuario</title>
    <style type="text/css" rel="stylesheet"> 
    .error{ 
        color: red; 
    }
    </style>

</head>
<body>

    <?php //incluir conexión a la base de datos 
    include 'conexionBD.php'; 

    $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null; 
    $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null; 
    $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null; 
    $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null; 
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null; 
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;

    $option = isset($_POST['rol']) ? $_POST['rol'] : false;
        if ($option) {
            echo htmlentities($_POST['rol'], ENT_QUOTES, "UTF-8");
        } else {
            echo "task option is required";
            exit; 
        }

    if ($option == 'Cliente') {
        $sql = "INSERT INTO usuario VALUES (0, '$cedula', '$nombres', '$apellidos', '$direccion', '$telefono', 
        '$correo', '$contrasena', '$option')";
    }else {
        $sql = "INSERT INTO restaurante VALUES (0, '$nombres', '$direccion', '$telefono', 
        '$correo', '$contrasena', '$option')";
    }


    

    if ($conn->query($sql) === TRUE) { 
        echo "<p>Se ha creado los datos personales correctamemte!!!</p>"; 
    }else {
        if($conn->errno == 1062){ 
            echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>"; 
        }else{
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>"; 
        }
    } 
    
    //cerrar la base de datos 
    
    $conn->close(); 
    
    if ($option == 'Cliente') {
        header ("Location: /SistemadeGestion/Admin/Vista/Usuario/Cliente/indexCliente.php");
    }else {
        header ("Location: /SistemadeGestion/Admin/Vista/Usuario/Restaurant/indexRestaurant.php");
    }

    ?>
    
</body>
</html>