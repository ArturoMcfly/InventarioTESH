
<form action="./php/registro.php" method="post">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <div class="form-group">
            <label  class="control-label">Nombre:</label>
            <input type="text" class="form-control"  name="nombre" required>
		  </div>
		  <div class="form-group">
            <label  class="control-label">Apellido Paterno:</label>
            <input type="text" class="form-control" name="ape_pat" required maxlength="45">
          </div>
		  <div class="form-group">
            <label  class="control-label">Apellido Materno:</label>
            <input type="text" class="form-control" name="ape_mat" required >
          </div>
      <div class="form-group">
        <label " class="control-label">Matricula:</label>
        <input type="text" class="form-control"  name="matricula" required maxlength="30"> 
      </div>
		  <div class="form-group">
            <label  class="control-label">Usuario:</label>
            <input type="text" class="form-control"  name="usuario" required maxlength="30"> 
          </div>
		  <div class="form-group">
            <label  class="control-label">Contraseña:</label>
            <input type="password" class="form-control"  name="pass" required maxlength="15">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>
