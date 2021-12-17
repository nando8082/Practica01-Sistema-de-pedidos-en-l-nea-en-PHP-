<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baratie</title>
</head>
<body>
<?php

    include 'conexionBD.php';
    
    $codigo = $_GET["id"];
    
    //$sql2 = "SELECT * FROM usuario WHERE usu_codigo = $codigo";
    
    $sql2 = "DELETE FROM clientes WHERE id=$codigo";

    if ($conn->query($sql2) === TRUE) {
    echo "<p>Se ha eliminado los datos correctamemte!!!</p>";
    } else {
    echo "<p>Error: " . $sql2 . "<br>" . mysqli_error($conn) . "</p>";
    }
    
    header("Location: /SistemadeGestion/Admin/Vista/Admin/indexAdmin.php");
    $conn->close();

 ?>
    
</body>
</html>