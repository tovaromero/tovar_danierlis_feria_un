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
    <title>Registrar Guía</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        if(isset($nombre_usuario)){
            echo '<p><b>Usuario: '.$nombre_usuario.'</b></p>';
        }
    ?>
    
    <form action="modelo/reg_guia.php" method="post" enctype="multipart/form-data" class="form-box">
        <h2>Registrar Guía</h2>
        
        <div class="form-group">
            <label for="id_guia">Código:</label>
            <input type="text" name="id_guia" id="id_guia" required>
        </div>
        <br>

        <div class="form-group">
            <label for="nombre_guia">Nombre:</label>
            <input type="text" name="nombre_guia" id="nombre_guia" required>
        </div>
        <br>

        <div class="form-group">
            <label for="correo_guia">Correo:</label>
            <input type="text" name="correo_guia" id="correo_guia" required>
        </div>
        <br>

        <div class="form-group">
            <label for="password_guia">Password:</label>
            <input type="text" name="password_guia" id="password_guia" required>
        </div>
        <br>

        <div class="form-group">
            <label for="foto_guia">Foto:</label>
            <input type="file" name="foto_guia" id="foto_guia" accept="image/*" capture="user" required>
        </div>
        <br>

        <div class="form-buttons">
            <button type="submit" class="btn">Registrar</button>
            <a href="index.php" class="btn">Volver</a>
        </div>
    </form>
</body>
</html>
