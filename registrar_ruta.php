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
    <title>Registrar Ruta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        if(isset($nombre_usuario)){
            echo '<p><b>Usuario: '.$nombre_usuario.'</b></p>';
        }
    ?>
    
    <form action="modelo/reg_ruta.php" method="post" class="form-box">
        <h2>Registrar Ruta</h2>
        
        <div class="form-group">
            <label for="id_ruta">Código:</label>
            <input type="text" name="id_ruta" id="id_ruta" required>
        </div>
        <br>

        <div class="form-group">
            <label for="nombre_ruta">Nombre:</label>
            <input type="text" name="nombre_ruta" id="nombre_ruta" required>
        </div>
        <br>

        <div class="form-group">
            <label for="id_guia">Guía:</label>
            <?php
                if(isset($_SESSION['username']))
                {
                    $query_dptos = "SELECT id_guia, nombre_guia FROM Guia ORDER BY nombre_guia ASC";
                    $consulta_dptos = mysqli_query($conexion, $query_dptos) or trigger_error("Error en la consulta MySQL: ".mysqli_error($conexion));

                    echo "<select name='id_guia' id='id_guia' required>";
                    echo "<option value='0'>Seleccione un guía</option>";
                    while($row = mysqli_fetch_array($consulta_dptos))
                    {
                        echo '<option value="'.$row['id_guia'].'">'.$row['nombre_guia'].'</option>';
                    }
                    echo "</select>";
                }
            ?>
        </div>
        <br>

        <div class="form-group">
            <label for="id_acompañante">Acompañante:</label>
            <?php
                if(isset($_SESSION['username']))
                {
                    $query_dptos = "SELECT id_acompañante, nombre_acompañante FROM Acompañante ORDER BY nombre_acompañante ASC";
                    $consulta_dptos = mysqli_query($conexion, $query_dptos) or trigger_error("Error en la consulta MySQL: ".mysqli_error($conexion));

                    echo "<select name='id_acompañante' id='id_acompañante' required>";
                    echo "<option value='0'>Seleccione un acompañante</option>";
                    while($row = mysqli_fetch_array($consulta_dptos))
                    {
                        echo '<option value="'.$row['id_acompañante'].'">'.$row['nombre_acompañante'].'</option>';
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
