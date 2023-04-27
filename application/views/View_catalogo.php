<h1 class="catalogo">Catalogo</h1>

  <div class="container catalogo">
    <input type="hidden" class="form-control catalogo" id="txb_id">
    <form>
      <div class=" catalogo">
        <label for="txb_nombre_producto">Producto:</label>
        <input type="text" class="form-control catalogo" id="txb_nombre_producto">
      </div>
      <div class=" catalogo">
        <label for="txb_stock">Stock:</label>
        <input type="number" class="form-control catalogo" id="txb_stock">
      </div>
      <div class=" catalogo">
        <label for="txb_precio">Precio:</label>
        <input type="number" class="form-control catalogo" id="txb_precio">
      </div>
      <div class="container-guardar-buscar">
        <button class="button-guardar-secundary catalogo" onclick="guardar()">Guardar <i class="fas fa-solid fa-floppy-disk"></i></button>
      </div>
    </form>
		<input type="text" class="form-control catalogo buscar" id="myInput" placeholder="Buscar articulo" >
    

	</div>

	<div class="container catalogo" id="tabla_productos">
	</div>





