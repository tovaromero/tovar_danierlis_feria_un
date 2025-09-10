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
    <title>Registrar Estudiante</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        if(isset($nombre_usuario)){
            echo '<p><b>Usuario: '.$nombre_usuario.'</b></p>';
        }
    ?>

    <form action="modelo/reg_estudiante.php" method="post" class="form-box">
        <h2>Registrar Estudiante</h2>

        <div class="form-group">
            <label for="id_estudiante">Código:</label>
            <input type="text" name="id_estudiante" id="id_estudiante" required>
        </div>
        <br>

        <div class="form-group">
            <label for="nombre_estudiante">Nombre:</label>
            <input type="text" name="nombre_estudiante" id="nombre_estudiante" required>
        </div>
        <br>

        <div class="form-group">
            <label for="doc_ident_estudiante">Doc: Ident:</label>
            <input type="text" name="doc_ident_estudiante" id="doc_ident_estudiante" required>
        </div>
        <br>

        <div class="form-group">
            <label for="correo_estudiante">Correo:</label>
            <input type="text" name="correo_estudiante" id="correo_estudiante" required>
        </div>
        <br>

        <div class="form-group">
            <label for="telefono_estudiante">Teléfono:</label>
            <input type="text" name="telefono_estudiante" id="telefono_estudiante" required>
        </div>
        <br>

        <div class="form-group">
            
            <?php
                if(isset($_SESSION['username']))
                {
                    $query_dptos = "SELECT id_colegio, nombre_colegio FROM Colegio ORDER BY nombre_colegio ASC";
                    $consulta_dptos = mysqli_query($conexion, $query_dptos) or trigger_error("Error en la consulta MySQL: ".mysqli_error($conexion));

                    echo "<select name='id_colegio' id='id_colegio' required>";
                    echo "<option value='0'>Seleccione un colegio</option>";
                    while($row = mysqli_fetch_array($consulta_dptos))
                    {
                        echo '<option value="'.$row['id_colegio'].'">'.$row['nombre_colegio'].'</option>';
                    }
                    echo "</select>";
                }
            ?>
        </div>
        <br>

        <div class="form-group">
        
            <?php
                if(isset($_SESSION['username']))
                {
                    $query_dptos = "SELECT id_ruta, nombre_ruta FROM Ruta ORDER BY nombre_ruta ASC";
                    $consulta_dptos = mysqli_query($conexion, $query_dptos) or trigger_error("Error en la consulta MySQL: ".mysqli_error($conexion));

                    echo "<select name='id_ruta' id='id_ruta' required>";
                    echo "<option value='0'>Seleccione una ruta</option>";
                    while($row = mysqli_fetch_array($consulta_dptos))
                    {
                        echo '<option value="'.$row['id_ruta'].'">'.$row['nombre_ruta'].'</option>';
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
