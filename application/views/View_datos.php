<h1>Nuestros Productos</h1>

<input type="text" class="form-control" id = "myInput" placeholder = "buscar articulo">

<div class="container" id="tabla_productos">
</div>
<script type="text/javascript">
listar_productos();



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


function crear_tabla_productos(productos){
    if(productos.length >0)
    {

      var tabla_dinamica="<table class='table table-striped'>";
      tabla_dinamica+="";
      
      tabla_dinamica+="<tr>";
      tabla_dinamica+="<th>Id</th>";
      tabla_dinamica+="<th>nombre_producto</th>";
      tabla_dinamica+="<th>Stock de productos</th>";
      tabla_dinamica+="<th>Precio</th>";
      tabla_dinamica+="</tr>";
      tabla_dinamica+="<tbody id='myTable'>";
      
      var i;
      for(i=0;i<productos.length;i++)
      {
        tabla_dinamica+="<tr>";
        tabla_dinamica+="<td>"+productos[i].id;+"</td>";
        tabla_dinamica+="<td>"+productos[i].nombre_producto+"</td>";
        tabla_dinamica+="<td>"+productos[i].stock+"</td>";
        tabla_dinamica+="<td>"+productos[i].precio+"</td>";
        tabla_dinamica+="</tr>";
      }
      tabla_dinamica+="</tbody>";
      tabla_dinamica+="</table>";
      $("#tabla_productos").html(tabla_dinamica);
      
    }
    else
    {
        $("#tabla_productos").html('<div class="alert alert-info"><strong> No hay datos que mostrar<strong></div>');
    }
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
</footer>
</body>




</html>