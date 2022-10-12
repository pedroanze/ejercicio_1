<div class="container">
<input type="hidden" class="form-control" id="txb_id">
<form>
    <div class="form-group">
      <label for="txb_nombre">Nombre:</label>
      <input type="text" class="form-control" id="txb_nombre">
    </div>
    <div class="form-group">
      <label for="txb_apellidoP">Apellido paterno:</label>
      <input type="text" class="form-control" id="txb_apellidoP">
    </div>
    <div class="form-group">
      <label for="txb_apellidoM">Apellido materno:</label>
      <input type="text" class="form-control" id="txb_apellidoM">
    </div>
    <div class= "container-guardar-buscar">
      <button class="button-guardar-secundary" onclick="guardar()">Guardar <i class="fas fa-solid fa-floppy-disk"></i> </button>
    </div>
  </form>
  <div class= "container-guardar-buscar">
    <button class="button-guardar-secundary" onclick="listar_personas_by()">Buscar <i class="fas fa-search search-icon "></i></button>
  </div>
</div>



<div class="container" id="tabla_personas">
</div>




