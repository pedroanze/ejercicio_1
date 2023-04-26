<h1>Catalogo</h1>

<div class="container">
<input type="hidden" class="form-control" id="txb_id">
<form>
    <div class="form-group">
      <label for="txb_nombre_producto">Producto:</label>
      <input type="text" class="form-control" id="txb_nombre_producto">
    </div>
    <div class="form-group">
      <label for="txb_stock">Stock:</label>
      <input type="text" class="form-control" id="txb_stock">
    </div>
    <div class="form-group">
      <label for="txb_presio">Precio:</label>
      <input type="text" class="form-control" id="txb_presio">
    </div>
    <div class= "container-guardar-buscar">
      <button class="button-guardar-secundary" onclick="guardar()">Guardar <i class="fas fa-solid fa-floppy-disk"></i> </button>
    </div>
  </form>


  <input type="text" class="form-control" id = "myInput" placeholder = "buscar">
</div>



<div class="container" id="tabla_productos">
</div>




