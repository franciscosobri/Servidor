<?php
require_once "../layout/header.php";
require_once "../BD/Database.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];


    $pdo = Database::getInstance();
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre_usuario = ?");
    $stmt->execute([$usuario]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $password === $user["contrasena"]) {
        $_SESSION['usuario'] = $user['nombre_usuario'];
        echo "<script>window.location.replace('../Appoiment/listAppoiment.php')</script>";
    }
    else{
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>




<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión</title>
</head>
<body>

<div class="d-flex justify-content-center align-items-center vh-100" style="background-color: #f0f2f5;">
  <div class="card p-4 shadow" style="width: 100%; max-width: 380px; border-radius: 1rem;">
    <div class="card-body">
      <h3 class="text-center mb-4">Iniciar Sesión</h3>

      <?php if (!empty($error)): ?>
  <div class="alert alert-danger text-center py-2">
    <?= htmlspecialchars($error) ?>
  </div>
<?php endif; ?>


      <form method="POST">
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Introduce tu usuario" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Introduce tu contraseña" required>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
</html>
