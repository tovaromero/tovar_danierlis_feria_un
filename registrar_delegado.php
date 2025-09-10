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
    <title>Registrar Delegado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        if(isset($nombre_usuario)){
            echo '<p><b>Usuario: '.$nombre_usuario.'</b></p>';
        }
    ?>
    
    <form action="modelo/reg_delegado.php" method="post" class="form-box">
        <h2>Registrar Delegado</h2>
        
        <div class="form-group">
            <label for="id_delegado">Código:</label>
            <input type="text" name="id_delegado" id="id_delegado" required>
        </div>
        <br>

        <div class="form-group">
            <label for="nombre_delegado">Nombre:</label>
            <input type="text" name="nombre_delegado" id="nombre_delegado" required>
        </div>
        <br>

        <div class="form-group">
            <label for="correo_delegado">Correo:</label>
            <input type="email" name="correo_delegado" id="correo_delegado" required>
        </div>
        <br>

        <div class="form-group">
            <label for="telefono_delegado">Teléfono:</label>
            <input type="text" name="telefono_delegado" id="telefono_delegado" required>
        </div>
        <br>

        <div class="form-group">
            <label for="password_delegado">Password:</label>
            <input type="password" name="password_delegado" id="password_delegado" required>
        </div>
        <br>

        <div class="form-group">
            
            <?php
                if(isset($_SESSION['username']))
                { 
                    $query_dptos = "SELECT id_universidad, nombre_universidad FROM Universidad ORDER BY nombre_universidad ASC";
                    $consulta_dptos = mysqli_query($conexion, $query_dptos) or trigger_error("Error en la consulta MySQL: ".mysqli_error($conexion));

                    echo "<select name='id_universidad' id='id_universidad' required>";
                    echo "<option value='0'>Seleccione una universidad</option>";
                    while($row = mysqli_fetch_array($consulta_dptos))
                    {
                        echo '<option value="'.$row['id_universidad'].'">'.$row['nombre_universidad'].'</option>';
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

