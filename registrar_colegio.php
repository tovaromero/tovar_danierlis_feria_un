<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
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
    <title>Registrar Colegio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        if(isset($nombre_usuario)){
            echo '<p><b>Usuario: '.$nombre_usuario.'</b></p>';
        }
    ?>
    
    <form action="modelo/reg_colegio.php" method="post" class="form-box">
        <h2>Registrar Colegio</h2>
        
        <div class="form-group">
            <label for="id_colegio">Código:</label>
            <input type="text" name="id_colegio" id="id_colegio" required>
        </div>
        <br>

        <div class="form-group">
            <label for="nombre_colegio">Nombre:</label>
            <input type="text" name="nombre_colegio" id="nombre_colegio" required>
        </div>
        <br>

        <div class="form-group">
            <label for="municipio_colegio">Municipio:</label>
            <input type="text" name="municipio_colegio" id="municipio_colegio" required>
        </div>
        <br>

        <div class="form-group">
            <label for="correo_colegio">Correo:</label>
            <input type="email" name="correo_colegio" id="correo_colegio" required>
        </div>
        <br>

        <div class="form-group">
            <label for="telefono_colegio">Teléfono:</label>
            <input type="tel" name="telefono_colegio" id="telefono_colegio" required>
        </div>
        <br>

        <div class="form-group">
            <label for="rector_colegio">Rector:</label>
            <input type="text" name="rector_colegio" id="rector_colegio" required>
        </div>
        <br>

        <div class="form-buttons">
            <button type="submit" class="btn">Registrar</button>
            <a href="index.php" class="btn">Volver</a>
        </div>
    </form>
</body>
</html>
