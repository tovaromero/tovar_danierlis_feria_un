<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username']))
    {
        $nombre_usuario = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Universidades</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        if(isset($nombre_usuario)){
            echo '<p><b>Usuario: '.$nombre_usuario.'</b></p>';
        }
    ?>
    
    <form action="modelo/reg_universidad.php" method="post" class="form-box">
        <h2>Registrar Universidad</h2>
        
        <div class="form-group">
            <label for="id_universidad">Código:</label>
            <input type="text" name="id_universidad" id="id_universidad" required>
        </div>
        <br>

        <div class="form-group">
            <label for="nombre_universidad">Nombre:</label>
            <input type="text" name="nombre_universidad" id="nombre_universidad" required>
        </div>
        <br>

        <div class="form-group">
            <label for="nit_universidad">Nit:</label>
            <input type="text" name="nit_universidad" id="nit_universidad" required>
        </div>
        <br>

        <div class="form-group">
            <label for="correo_universidad">Correo:</label>
            <input type="text" name="correo_universidad" id="correo_universidad" required>
        </div>
        <br>

        <div class="form-group">
            <label for="telefono_universidad">Teléfono:</label>
            <input type="text" name="telefono_universidad" id="telefono_universidad" required>
        </div>
        <br>

        <div class="form-group">
            <label for="sitio_web_universidad">Sitio Web:</label>
            <input type="text" name="sitio_web_universidad" id="sitio_web_universidad" required>
        </div>
        <br>

        <div class="form-group">
            <label for="rector_universidad">Nombre del Rector:</label>
            <input type="text" name="rector_universidad" id="rector_universidad" required>
        </div>
        <br>

        <div class="form-buttons">
            <button type="submit" class="btn">Registrar</button>
            <a href="index.php" class="btn">Volver</a>
        </div>
    </form>
</body>
</html>
