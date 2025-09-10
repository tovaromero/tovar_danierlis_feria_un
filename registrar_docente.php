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
    <title>Registrar Docente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        if(isset($nombre_usuario)){
            echo '<p><b>Usuario: '.$nombre_usuario.'</b></p>';
        }
    ?>
    
    <form action="modelo/reg_docente.php" method="post" class="form-box">
        <h2>Registrar Docente</h2>
        
        <div class="form-group">
            <label for="id_docente">Código:</label>
            <input type="text" name="id_docente" id="id_docente" required>
        </div>
        <br>

        <div class="form-group">
            <label for="nombre_docente">Nombre:</label>
            <input type="text" name="nombre_docente" id="nombre_docente" required>
        </div>
        <br>

        <div class="form-group">
            <label for="doc_ident_docente">Doc: Ident:</label>
            <input type="text" name="doc_ident_docente" id="doc_ident_docente" required>
        </div>
        <br>

        <div class="form-group">
            <label for="correo_docente">Correo:</label>
            <input type="text" name="correo_docente" id="correo_docente" required>
        </div>
        <br>

        <div class="form-group">
            <label for="telefono_docente">Teléfono:</label>
            <input type="text" name="telefono_docente" id="telefono_docente" required>
        </div>
        <br>

        <div class="form-group">
            <label for="password_docente">Password:</label>
            <input type="text" name="password_docente" id="password_docente" required>
        </div>
        <br>

        <div class="form-group">
            <label for="colegio_docente">Colegio:</label>
            <input type="text" name="colegio_docente" id="colegio_docente" required>
        </div>
        <br>

        <div class="form-group">
            <label for="ruta_docente">Ruta:</label>
            <input type="text" name="ruta_docente" id="ruta_docente" required>
        </div>
        <br>

        <div class="form-buttons">
            <button type="submit" class="btn">Registrar</button>
            <a href="index.php" class="btn">Volver</a>
        </div>
    </form>
</body>
</html>
