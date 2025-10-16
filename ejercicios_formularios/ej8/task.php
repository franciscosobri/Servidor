<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="title" class="col-4 col-form-label">Titulo</label> 
    <div class="col-8">
      <input id="title" name="title" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-4 col-form-label">Descripcion</label> 
    <div class="col-8">
      <input id="description" name="description" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Responsabe</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select"></select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Prioridad</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="priority" id="priority_0" type="radio" class="custom-control-input" value="high"> 
        <label for="priority_0" class="custom-control-label">Alta</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="priority" id="priority_1" type="radio" class="custom-control-input" value="mid"> 
        <label for="priority_1" class="custom-control-label">Media</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="priority" id="priority_2" type="radio" class="custom-control-input" value="low"> 
        <label for="priority_2" class="custom-control-label">Baja</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Checkboxes</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input" value="inProgress"> 
        <label for="checkbox_0" class="custom-control-label">En Progreso</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="completed"> 
        <label for="checkbox_1" class="custom-control-label">Completada</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>