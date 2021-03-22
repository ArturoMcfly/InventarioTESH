
<form id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-body">
			<div id="datos_ajax_register"></div>
          <div class="form-group">
            <label for="codigo0" class="control-label">Nombre:</label>
            <input type="text" class="form-control" id="codigo0" name="codigo" required>
		  </div>
		  <div class="form-group">
            <label for="nombre0" class="control-label">Apellido Paterno:</label>
            <input type="text" class="form-control" id="nombre0" name="nombre" required maxlength="45">
          </div>
		  <div class="form-group">
            <label for="moneda0" class="control-label">Apellido Materno:</label>
            <input type="text" class="form-control" id="moneda0" name="moneda" required >
          </div>
		  <div class="form-group">
            <label for="capital0" class="control-label">Carrera:</label>
            <input type="text" class="form-control" id="capital0" name="capital" required maxlength="30"> 
          </div>
		  <div class="form-group">
            <label for="continente0" class="control-label">Contraseña:</label>
            <input type="text" class="form-control" id="continente0" name="continente" required maxlength="15">
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
