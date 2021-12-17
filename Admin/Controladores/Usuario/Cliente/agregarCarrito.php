
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
        

        
        //incluir conexión a la base de datos
        include '../conexionBD.php';

        $codigo = $_GET["id"];
        echo"$codigo";

        date_default_timezone_set("America/Guayaquil");
        $fecha = date('Y-m-d H:i:s', time());

        $result = "SELECT precio FROM productos WHERE id = $codigo";

        $sql2 = "INSERT INTO `factura_cabecera` VALUES (0, '25', '$result', '$fecha','1')";

        if ($conn->query($sql2) === TRUE) {
        
            //echo('se creo el telefono');
        } else {
            if($conn->errno == 1062){
                echo "<p class='error'>La persona con el numero $telefono ya esta registrada en el sistema </p>";
            }else{
            
                echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";

            }
        }
        //

        header("Location: /SistemadeGestion/Admin/Vista/Usuario/Cliente/indexCliente.php");
        $conn->close();




    ?>
    
</body>
</html>