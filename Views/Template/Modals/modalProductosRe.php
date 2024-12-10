<!-- Modal -->
<div class="modal fade" id="modalFormProducto" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formProducto" name="formProducto" class="form-horizontal" enctype="multipart/form-data" method="POST">
          <input type="hidden" id="idProducto" name="idProducto" value="">
          <p class="text-primary">Todos los campos son obligatorios.</p>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="txtCodigo">Codigo</label>
              <input type="text" class="form-control" id="txtCodigo" name="txtCodigo" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="txtColor">Color</label>
              <input type="text" class="form-control valid validText" id="txtColor" name="txtColor" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="txtImagen">Imagen</label>
              <input type="file" class="form-control valid validText" id="txtImagen" name="txtImagen" required="">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="txtNombre">Nombre Producto</label>
              <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Especificaciones</label>
              <textarea class="form-control" id="txtEspecificacion" name="txtEspecificacion" rows="2"
                placeholder="Descripción del Producto" required=""></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="txtPrecio">Precio</label></label>
              <input type="number" class="form-control" id="txtPrecio" name="txtPrecio" step="0.50" min="0"
                max="1000000" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="txtCategoria">Categoria</label>
              <select name="txtCategoria" id="txtCategoria" class="form-control valid validText" required="">
                <option value="" disabled selected>Seleccione una opcion</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="txtFecha">Fecha Registro</label>
              <input type="date" class="form-control" id="txtFecha" name="txtFecha">
            </div>
            <div class="form-group col-md-6">
              <label for="listStatus">Status</label>
              <select class="form-control selectpicker" id="listStatus" name="listStatus" required>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
              </select>
            </div>
          </div>
          <div class="tile-footer">
            <button id="btnActionForm" class="btn btn-primary" type="submit"><i
                class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-danger" type="button" data-dismiss="modal"><i
                class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalViewUser" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos del Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Codigo:</td>
              <td id="celCodigo">654654654</td>
            </tr>
            <tr>
              <td>Color:</td>
              <td id="celColor">negro</td>
            </tr>
            <tr>
              <td>Imagen:</td>
              <td id="celImagen">negro</td>
            </tr>
            <tr>
              <td>Nombre Producto:</td>
              <td id="celNombre">Jacob</td>
            </tr>
            <tr>
              <td>Especificaciones:</td>
              <td id="celEspecificacion">Jacob</td>
            </tr>
            <tr>
              <td>Precio:</td>
              <td id="celPrecio">Larry</td>
            </tr>
            <tr>
              <td>Categoria:</td>
              <td id="celCategoria">Larry</td>
            </tr>
            <tr>
              <td>Fecha registro:</td>
              <td id="celFechaRegistro">Larry</td>
            </tr>
            <tr>
              <td>Estado:</td>
              <td id="celEstado">Larry</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>