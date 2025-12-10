<?php
require_once "../layout/header.php";
require_once "AppoimentUtility.php";
require_once "../AppoimentType/AppoimentTypeUtility.php";
require_once "../User/UserUtility.php";

// Inicializar variables para evitar warnings
$id = "";
$appoiment = [];
$username = "";
$appoimentsType = [];
$typeAppoiment = "";

if (isset($_GET["action"])){
  if ($_GET["action"] == "edit"){
    // Estoy editando
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
      if (!isset($_POST["submit"])){
        $id = $_POST["id"] ?? "";
        $appoiment = AppoimentUtility::getAppoiment($id);
        $appoimentsType = AppoimentTypeUtility::getListType();
        $username = UserUtility::getUserName($appoiment["usuario_id"] ?? "");
      } else {
        AppoimentUtility::updateAppoiment($_POST["id"], $_POST["typeAppoimentId"], $_POST["date"], $_POST["time"]);
        // Redireccionar después de editar
        echo "<script>window.location.replace('../Appoiment/listAppoiment.php')</script>";
        exit();
      }
    } else {
      // Si es GET, obtener datos para mostrar el formulario
      if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $appoiment = AppoimentUtility::getAppoiment($id);
        $appoimentsType = AppoimentTypeUtility::getListType();
        $username = UserUtility::getUserName($appoiment["usuario_id"] ?? "");
      } else {
        echo "<script>window.location.href=\"../error.php?msg=Imposible acceder a edición sin identificador\"</script>";
        exit();
      }
    }
  } elseif ($_GET["action"] == "delete") {
    if (isset($_GET["id"])){
      $id = $_GET["id"];
      $appoiment = AppoimentUtility::getAppoiment($id);
      $typeAppoiment = AppoimentTypeUtility::getNameType($appoiment["tipo_cita_id"] ?? "");
      $username = UserUtility::getUserName($appoiment["usuario_id"] ?? "");
      
      // Procesar borrado si se envió el formulario
      if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["submit"])) {
        AppoimentUtility::deleteAppoiment($id);
        header("Location: appoimentList.php");
        exit();
      }
    } else {
      echo "<script>window.location.href=\"../error.php?msg=Imposible acceder a esta página para borrar sin identificador\"</script>";
      exit();
    }
  }
} else {
  echo "<script>window.location.href=\"../error.php?msg=Imposible acceder a esta página sin identificar la acción\"</script>";
  exit();
}
?>
<div>
<form method="post">
  <input id="id" name="id" type="hidden" class="form-control" value="<?= htmlspecialchars($id) ?>">
  <div class="form-group row">
    <label for="user_id" class="col-4 col-form-label">Usuario</label> 
    <div class="col-8">
      <input id="username" name="username" type="text" class="form-control" value="<?= htmlspecialchars($username) ?>" disabled>
    </div>
  </div>
  <div class="form-group row">
    <label for="typeAppoiment" class="col-4 col-form-label">Tipo de cita</label> 
    <div class="col-8">
        <?php 
          if ($_GET["action"] == "edit"){ 
            if (!empty($appoimentsType)) {
        ?>
        <select id="typeAppoimentId" name="typeAppoimentId" class="form-control">
            <?php
            foreach ($appoimentsType as $type){
                $selected = ($appoiment["tipo_cita_id"] ?? "") == $type["id"] ? "selected" : "";
                echo "<option value=\"" . htmlspecialchars($type["id"]) . "\" $selected>" . htmlspecialchars($type["nombre"]) . "</option>";
            }
            ?>          
        </select>
        <?php
            } else {
              echo "<p class=\"text-danger\">No hay tipos de cita disponibles</p>";
            }
          } elseif ($_GET["action"] == "delete"){ 
        ?>
           <input id="typeAppoimentId" name="typeAppoimentId" type="text" class="form-control" value="<?= htmlspecialchars($typeAppoiment) ?>" disabled>
        <?php } ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="date" class="col-4 col-form-label">Fecha</label> 
    <div class="col-8">
      <input id="date" name="date" type="text" class="form-control" value="<?= htmlspecialchars($appoiment["fecha"] ?? "") ?>" <?= $_GET["action"] == "delete" ? "readonly" : "" ?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="time" class="col-4 col-form-label">Hora</label> 
    <div class="col-8">
      <input id="time" name="time" type="text" class="form-control" value="<?= htmlspecialchars($appoiment["hora"] ?? "") ?>" <?= $_GET["action"] == "delete" ? "readonly" : "" ?>>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <?php 
        switch ($_GET["action"]) {
          case "delete":
            echo '<button name="submit" type="submit" class="btn btn-danger">Borrar</button>';
            break;
          case "edit":
            echo '<button name="submit" type="submit" class="btn btn-primary">Editar</button>';
            break;  
        }
      ?>
      <a href="appoimentList.php" class="btn btn-secondary">Cancelar</a>
    </div>
  </div>
</form>
</div>
<?php
  require "../layout/footer.php"
?>