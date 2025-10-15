<?php
session_start();


if(!isset($_SESSION['name'])){
    header('Location: login.php');
    exit;
}


$date= '';
$time = '';
$typeDate = '';
$error = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $date = trim($_POST['date'] ?? '');
    $time = trim($_POST['time'] ?? '');
    $typeDate = trim($_POST['typeDate'] ?? '');


    if(empty($date) || empty($time) || empty($typeDate)){
        echo '<p class="text-danger"> Debes completar todos los campos.';
    }
    else{
        $today = date('Y-m-d');
        $currentTime = date('H:i');

        if($date < $today){
            $error = "La fecha no puede ser anterior a hoy";
        }
        elseif($date == $today && $time < $currentTime){
            $error = "La hora no puede ser menor a la actual.";
        }
        else{
            $_SESSION['reservas'][] = ['fecha' => $date,
                                    'hora' => $time,
                                    'tipo' => $typeDate,
                                    'usuario' => $_SESSION['name']
        ];
        header('Location: resumen.php');
        exit;
        }
    }
}



?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>


<form method="POST" class="m-5">
  <div class="form-group row">
    <label for="date" class="col-4 col-form-label">Fecha</label> 
    <div class="col-8">
      <input id="date" name="date" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="time" class="col-4 col-form-label">Hora</label> 
    <div class="col-8">
      <input id="time" name="time" type="time" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="typeDate" class="col-4 col-form-label">Tipo de Cita</label> 
    <div class="col-8">
      <select id="typeDate" name="typeDate" class="custom-select">
        <option value="tutoria">Tutoria</option>
        <option value="laboratorio">Laboratorio</option>
        <option value="reunion">Reunion</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>