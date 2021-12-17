
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
        

        
        //incluir conexión a la base de datos
        include '../conexionBD.php';

        
        $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : null;
        $descripcion = isset($_POST["descripcion"]) ? mb_strtoupper(trim($_POST["descripcion"]), 'UTF-8') : null;
        $precio = isset($_POST["precio"]) ? mb_strtoupper(trim($_POST["precio"]), 'UTF-8') : null;

        $target_dir = 'SistemaPedido/Img';
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["foto"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["foto"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $sql2 = "INSERT INTO `productos` VALUES (0, '$nombre', '$descripcion', '$precio', 
            '7','1', '$imageFileType')";

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

        header("Location: /SistemadeGestion/Admin/Vista/Usuario/Restaurant/registrarProducto.php");
        $conn->close();




    ?>
    
</body>
</html>