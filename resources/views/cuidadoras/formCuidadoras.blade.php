<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Servicio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="tipoDocumento" class="form-label">Tipo documento</label>
                    <input type="text" class="form-control" id="tipoDocumento" name="tipoDocumento">
                </div>
                <div class="mb-3">
                    <label for="documento" class="form-label">Documento</label>
                    <input type="text" class="form-control" id="documento" name="documento">
                </div>

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ocupacion</label>
                        <input type="text" class="form-control" id="ocupacion" name="ocupacion">
                    </div>

                    <div class="mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Servicio seleccionado</label>
                            <select class="form-select" id="servicio" name="servicioInteres">
                                <option value="opcion1">Opción 1</option>
                                <option value="opcion2">Opción 2</option>
                                <option value="opcion3">Opción 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Servicio seleccionado</label>
                            <select class="form-select" id="servicio" name="servicio_id">
                                <option value="opcion1">Opción 1</option>
                                <option value="opcion2">Opción 2</option>
                                <option value="opcion3">Opción 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>