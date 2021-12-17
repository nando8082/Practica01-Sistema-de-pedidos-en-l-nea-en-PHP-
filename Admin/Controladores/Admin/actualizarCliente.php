<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Cliente</title>
</head>
<body>
<?php
    //incluir conexión a la base de datos
    include 'conexionBD.php';
    $codigo = $_GET["id"];
    echo "$codigo";

    $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null; 
    $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null; 
    $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null; 
    $telefono = isset($_POST["numero"]) ? trim($_POST["numero"]): null; 
    $correo = isset($_POST["email"]) ? trim($_POST["email"]): null;
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;

    
    $sql = "UPDATE clientes SET nombre = '$nombres', apellido = '$apellidos', direccion = '$direccion',
    telefono = '$telefono', correo_electronico = '$correo', contrasena = '$contrasena' WHERE id = $codigo";

    /*$sql = "UPDATE usuario " .
    "nombres = '$nombres', " .
    "apellidos = '$apellidos', " .
    "apellidos = '$direccion', " .
    "telefono = '$telefono', " .
    "correo = '$correo', " .
    "WHERE id = $codigo";
    */
    



    if ($conn->query($sql) === TRUE) {
    echo "Se ha actualizado los datos personales correctamemte!!!<br>";
    } else {
        echo("notesalio");
    echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
    
    header("Location: /SistemadeGestion/Admin/Vista/Admin/indexAdmin.php");

    $conn->close();
?>
    
</body>
</html>