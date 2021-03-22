
<form id="reciveDatos">
<div class="modal fade" id="Iniciar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-body">
			<div id="datos_ajax_register"></div>
          <div class="form-group">
            <label for="codigo0" class="control-label">Usuario:</label>
            <input type="text" class="form-control" id="codigo0" name="user" required>
		  </div>
		  <div class="form-group">
            <label for="nombre0" class="control-label">Contraseña:</label>
            <input type="password" class="form-control" id="nombre0" name="pass" required maxlength="45">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </div>
    </div>
  </div>
</div>
</form>
