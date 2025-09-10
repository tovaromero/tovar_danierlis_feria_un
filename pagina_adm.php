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
    <title>Página del administrador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-box">
        <h1>Página del Administrador</h1>

        <?php if(isset($nombre_usuario)) { ?>
            <p><b>Usuario:</b> <?php echo $nombre_usuario; ?></p>
        <?php } ?>

        <div class="form-buttons">
            <a href="registrar_acompañante.php" class="btn">Registrar acompañante</a>
            <a href="registrar_administrador.php" class="btn">Registrar administrador</a>
            <a href="registrar_apoyo.php" class="btn">Registrar apoyo</a>
            <a href="registrar_colegio.php" class="btn">Registrar colegio</a>
            <a href="registrar_delegado.php" class="btn">Registrar delegado</a>
            <a href="registrar_docente.php" class="btn">Registrar docente</a>
            <a href="registrar_estudiante.php" class="btn">Registrar estudiante</a>
            <a href="registrar_guia.php" class="btn">Registrar guía</a>
            <a href="registrar_ruta.php" class="btn">Registrar ruta</a>
            <a href="registrar_universidad.php" class="btn">Registrar universidad</a>
            <a href="cerrar_sesion.php" class="btn btn-danger">Cerrar sesión</a>
        </div>
    </div>
</body>
</html>


