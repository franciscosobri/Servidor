<?php
session_start();

if(!isset($_SESSION['name'])){
    header('Location: login.php');
    exit;
}

$reservas = $_SESSION['reservas'] ?? [];

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['borrar'])){
    $index = $_POST['borrar'];
    if(isset($reservas[$index])){
        unset($_SESSION['reservas'][$index]);
        $_SESSION['reservas'] = array_values($_SESSION['reservas']);
        header('Location: resumen.php');
        exit;
    }
}
elseif($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editar'])){
    $index = $_POST['editar'];
    if(isset($reservas[$index])){
        $_SESSION['editar'] = $reservas[$index];

        unset($_SESSION['reservas'][$index]);

        $_SESSION['reservas'] = array_values($_SESSION['reservas']);
    }
    header('Location: formulario.php');
}

?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Resumen de Citas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="bg-white p-5 rounded shadow-sm">
        <h3 class="mb-4 text-primary">Resumen de tus citas</h3>

        <?php if (empty($reservas)): ?>
            <p class="lead">No tienes ninguna cita reservada.</p>
            <a href="formulario.php" class="btn btn-primary">Añadir nueva cita</a>
        <?php else: ?>
            <?php foreach ($reservas as $idx => $reserva): 
                $fecha = date('d/m/Y', strtotime($reserva['fecha']));
                $hora = htmlspecialchars($reserva['hora']);
                $tipo = htmlspecialchars($reserva['tipo']);
                $usuario = htmlspecialchars($reserva['usuario']);
            ?>
                <div class="alert alert-info d-flex justify-content-between align-items-center">
                    <div>
                        Hola, <strong><?= $usuario ?></strong>. Has reservado una cita de tipo 
                        <strong><?= $tipo ?></strong> para el <strong><?= $fecha ?></strong> a las <strong><?= $hora ?></strong>.
                    </div>
                    <form method="POST" class="mb-0">
                        <button type="submit" name="editar" value="<?= $idx ?>" class="btn btn-warning">
                            <i class="fa fa-trash"></i> Editar
                        </button>
                        
                        <button type="submit" name="borrar" value="<?= $idx ?>" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Borrar
                        </button>
                    </form>
                </div>
            <?php endforeach; ?>

            
        <?php endif; ?>

        <a href="logout.php" class="btn btn-secondary mt-3">
            <i class="fa fa-sign-out"></i> Cerrar sesión
        </a>
    </div>
</div>

</body>
</html>