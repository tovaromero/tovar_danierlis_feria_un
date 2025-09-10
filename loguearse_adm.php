<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feria de Universidades — Login Administrador</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-box">
    <h1>Iniciar Sesión como Administrador</h1>

    <!-- Formulario de inicio de sesión -->
    <form action="modelo/loguear_adm.php" method="post">
      <div class="form-group">
        <label for="correo_administrador">E-mail:</label>
        <input type="email" name="correo_administrador" id="correo_administrador" required>
      </div>

      <div class="form-group">
        <label for="password_administrador">Contraseña:</label>
        <input type="password" name="password_administrador" id="password_administrador" required>
      </div>

      <div class="form-buttons">
        <button type="submit" class="btn">Ingresar</button>
        <a href="index.php" class="btn">Volver</a>
      </div>
    </form>
  </div>
</body>
</html>
