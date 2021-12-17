
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baratie Pago</title>
</head>
<body>

    <?php
        

        
        //incluir conexión a la base de datos
        include '../conexionBD.php';

        $codigo = $_GET["id"];

        $result = "SELECT total FROM factura_cabecera WHERE id = $codigo";

        $restau = "SELECT nombre FROM restaurantes WHERE id = 7";

        $sql2 = "INSERT INTO `factura_cabecera` VALUES (0, '$codigo', '', '$result', '$total','1')";

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