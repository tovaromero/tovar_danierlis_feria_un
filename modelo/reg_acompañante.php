<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require 'conexion.php';
session_start();

// Variable para mostrar mensaje
$mensaje = "";

// Verificar si se enviaron los datos del formulario
if(isset($_POST['id_acompañante']) && isset($_POST['nombre_acompañante'])) {

    $id_aco = $_POST['id_acompañante'];
    $nombre_aco = $_POST['nombre_acompañante'];

    // Insertar en la base de datos
    $query = "INSERT INTO Acompañante(id_acompañante, nombre_acompañante) VALUES ('$id_aco', '$nombre_aco')";
    $insercion = mysqli_query($conexion, $query);

    if($insercion) {
        $mensaje = "✅ ¡El acompañante ha sido registrado correctamente!";
    } else {
        $mensaje = "❌ Error al registrar el acompañante. Intenta nuevamente.";
    }

} else {
    $mensaje = "⚠️ No se enviaron datos del acompañante.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acompañante Registrado - Colegio San José de Guanentá</title>
  <link rel="stylesheet" href="/opt/lampp/htdocs/tovar_danierlis_feria_un/style.css">
</head>
<body>

  <!-- Header -->
  <header class="header">
    <h1>🎓Registro de Acompañante🎓</h1>
  </header>

  <!-- Mensaje de confirmación/error -->
  <section class="info" style="text-align:center; margin-top:40px;">
    <p><b><?php echo $mensaje; ?></b></p>
  </section>

  <!-- Botones -->
  <section class="buttons" style="text-align:center; margin-top:30px; display:flex; justify-content:center; gap:15px;">
    <a href="../registrar_acompañante.php" class="btn"> Registrar Otro Acompañante</a>
    <a href="../index.php" class="btn">🔑Volver al Inicio</a>
  </section>

  <!-- Footer -->
  <footer class="footer" style="text-align:center; margin-top:50px;">
    <p>&copy; 2025 Colegio San José de Guanentá</p>
  </footer>

</body>
</html>


