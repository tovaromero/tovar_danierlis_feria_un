<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    require 'modelo/conexion.php';
    session_start();

    if(isset($_SESSION['username'])) {
        $nombre_usuario = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Apoyo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registrar Apoyo</h1>

    <?php if(isset($nombre_usuario)) { ?>
        <p><b>Usuario:</b> <?php echo $nombre_usuario; ?></p>
    <?php } ?>

    <form action="modelo/reg_apoyo.php" method="post" enctype="multipart/form-data" class="form-box">
     

        <div class="form-group">
            <label for="id_apoyo">Código:</label> 
            <input type="text" name="id_apoyo" id="id_apoyo" required>
        </div>
        <br>

        <div class="form-group">
            <label for="nombre_apoyo">Nombre:</label> 
            <input type="text" name="nombre_apoyo" id="nombre_apoyo" required>
        </div>
        <br>

        <div class="form-group">
            <label for="correo_apoyo">Correo:</label> 
            <input type="email" name="correo_apoyo" id="correo_apoyo" required>
        </div>
        <br>

        <div class="form-group">
            <label for="password_apoyo">Password:</label> 
            <input type="password" name="password_apoyo" id="password_apoyo" required>
        </div>
        <br>

        <div class="form-group">
            <label for="foto_apoyo">Foto:</label> 
            <input type="file" name="foto_apoyo" id="foto_apoyo" accept="image/*" required>
        </div>
        <br>

        <div class="form-group">
           
            <?php
                if(isset($_SESSION['username'])) {
                    $query_dptos = "SELECT id_universidad, nombre_universidad 
                                    FROM Universidad 
                                    ORDER BY nombre_universidad ASC";

                    $consulta_dptos = mysqli_query($conexion, $query_dptos) 
                        or trigger_error("Error en la consulta MySQL: ".mysqli_error($conexion));

                    echo "<select name='id_universidad' id='id_universidad' required>";
                    echo "<option value=''>Seleccione una universidad</option>";
                    while($row = mysqli_fetch_array($consulta_dptos)) {
                        echo "<option value='".$row['id_universidad']."'>".$row['nombre_universidad']."</option>";
                    }
                    echo "</select>";
                }
            ?>
        </div>
        <br>

        <div class="form-buttons">
            <button type="submit" class="btn">Registrar</button>
            <a href="index.php" class="btn">Volver</a>
        </div>
    </form>
</body>
</html>
