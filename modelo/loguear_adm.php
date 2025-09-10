<?php
require 'conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $administrador = $_POST['correo_administrador'];
    $password = $_POST['password_administrador'];

    $query_1 = "SELECT correo_administrador, COUNT(*) AS contar 
                FROM Administrador 
                WHERE correo_administrador = '$administrador' 
                AND password_administrador = '$password'";

    $consulta = mysqli_query($conexion, $query_1) or trigger_error("Error en la consulta MySQL:  " . mysqli_error($conexion));  
    $resultado = mysqli_fetch_array($consulta);

    if ($resultado['contar'] > 0) {
        $_SESSION['username'] = $administrador;
        header("Location: ../pagina_adm.php");
        exit();
    } else {
        $error = "El administrador no existe, o usuario o contraseña incorrecta";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Administrador</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  

    <?php if (!empty($error)) { ?>
      <p style="color: red; font-weight: bold;"><?php echo $error; ?></p>
    <?php } ?>

   
      <div class="form-buttons">
     
     <button> <a href="../index.php" class="btn">Volver</a></button>  
      </div>
    </form>
  </div>
</body>
</html>
