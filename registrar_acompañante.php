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
    <title>Registrar Acompañante</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        if(isset($nombre_usuario)){
            echo '<p><b>Usuario: '.$nombre_usuario.'</b></p>';
        }
    ?>
    
    <form action="modelo/reg_acompañante.php" method="post" class="form-box">
        <h2>Registrar Acompañante</h2>
        
        <div class="form-group">
            <label for="id_acompañante">Código:</label>
            <input type="text" name="id_acompañante" id="id_acompañante" required>
        </div>
        <br>

        <div class="form-group">
            <label for="nombre_acompañante">Nombre:</label>
            <input type="text" name="nombre_acompañante" id="nombre_acompañante" required>
        </div>
        <br>

        <div class="form-buttons">
            <button type="submit" class="btn">Registrar</button>
            <a href="index.php" class="btn">Volver</a>
        </div>
    </form>
</body>
</html>
