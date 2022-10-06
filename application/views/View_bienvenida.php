<div class="container">
<form class= "form-container">
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
    <button class="button-guardar" onclick="guardar()">Guardar</button>
    </div>
    <div>
    <section class="main-input">
      <div class="main-input-container"> 
          <input type="text" class="input-search" id = "myInput" placeholder = "buscar">
          <i class="fas fa-search search-icon "></i>
        </div>
    </section>
    
  </form>
</div>

<div class="container" id="tabla_personas">
  
</div>



