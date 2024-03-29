<script type="text/javascript">
listar_productos();

function guardar(){
  if($("#txb_id").val()==""){
    $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_catalogo/guardar");?>",
    data:{
      vnombre_producto :$("#txb_nombre_producto").val(),
      vstock :$("#txb_stock").val(),
      vprecio :$("#txb_precio").val()
    },
    success: function(){
      limpiar_campos();
    },

});
  }else{
    $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_catalogo/modificar");?>",
    data:{
      vid :$("#txb_id").val(),
      vnombre_producto :$("#txb_nombre_producto").val(),
      vstock :$("#txb_stock").val(),
      vprecio :$("#txb_precio").val()
    },
    success: function(){
      limpiar_campos();
      listar_productos();
    },

});
  }


}



function limpiar_campos(){
  $("#txb_nombre_producto").val("");
  $("#txb_stock").val("");
  $("#txb_precio").val("");
  $("#txb_id").val("");

}


function editar(id,nombre_producto,stock,precio){
  $("#txb_id").val(id);
  $("#txb_nombre_producto").val(nombre_producto);
  $("#txb_stock").val(stock);
  $("#txb_precio").val(precio);
}


function listar_productos(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_catalogo/obtener_todas_las_productos");?>",
    data:{
      
    },
    success: function(productos){
      crear_tabla_productos(productos);
    },
    dataType:'json'
});

}

function listar_productos_by(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_catalogo/obtener_productos_by");?>",
    data:{
      vnombre_producto :$("#txb_nombre_producto").val(),
      vstock :$("#txb_stock").val(),
      vprecio :$("#txb_precio").val()
    },
    success: function(productos){
      crear_tabla_productos(productos);
    },
    dataType:'json'
});

}


function crear_tabla_productos(productos) {
  if (productos.length > 0) {
    var tabla_dinamica = "<table class='table table-striped'>";
    tabla_dinamica += "";

    tabla_dinamica += "<tr>";
    tabla_dinamica += "<th>Id</th>";
    tabla_dinamica += "<th>Nombre Producto</th>";
    tabla_dinamica += "<th>Stock de Productos</th>";
    tabla_dinamica += "<th>Precio</th>";
    tabla_dinamica += "<th>Acciones</th>";
    tabla_dinamica += "</tr>";
    tabla_dinamica += "<tbody id='myTable'>";

    var i;
    for (i = 0; i < productos.length; i++) {
      tabla_dinamica += "<tr>";
      tabla_dinamica += "<td>" + productos[i].id + "</td>";
      tabla_dinamica += "<td>" + productos[i].nombre_producto + "</td>";
      tabla_dinamica += "<td>" + productos[i].stock + "</td>";
      tabla_dinamica += "<td>" + productos[i].precio + "</td>";
      tabla_dinamica += "<td>";
      tabla_dinamica +=
        "<button class='boton-eliminar' onclick=\"eliminar('" +
        productos[i].id +
        "')\">Eliminar</button>";
      tabla_dinamica +=
        "<button class='boton-editar' onclick=\"editar('" +
        productos[i].id +
        "','" +
        productos[i].nombre_producto +
        "','" +
        productos[i].stock +
        "','" +
        productos[i].precio +
        "')\">Editar</button>";
      tabla_dinamica += "</td>";
      tabla_dinamica += "</tr>";
    }
    tabla_dinamica += "</tbody>";
    tabla_dinamica += "</table>";
    $("#tabla_productos").html(tabla_dinamica);
  } else {
    $("#tabla_productos").html(
      '<div class="alert alert-info"><strong>No hay datos que mostrar</strong></div>'
    );
  }
}


function eliminar(id){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_catalogo/eliminar");?>",
    data:{
      vid :id
      
    },
    success: function(){
      limpiar_campos();
      listar_productos();
    },

});

}


 $(document).ready(function(){
   $("#myInput").on("keyup", function() {
     var value = $(this).val().toLowerCase();
     $("#myTable tr").filter(function() {
       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
     });
   });
 });





</script>

<footer>
  <div class="container">
    <p>Desarrollado por Pedro Anze y Matias Ramirez</p>
  </div>
</footer>

</body>




</html>