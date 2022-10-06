<script type="text/javascript">
listar_personas();



function guardar(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_bienvenida/guardar");?>",
    data:{
      vnombre :$("#txb_nombre").val(),
      vapellidop :$("#txb_apellidoP").val(),
      vapellidom :$("#txb_apellidoM").val()
    },
    success: function(){
      limpiar_campos();
    },

});

}

function guardar_cambios($id){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_bienvenida/guardar_cambio");?>",
    data:{
      vid: $id,
      vnombre :$("#txb_nombre").val(),
      vapellidop :$("#txb_apellidoP").val(),
      vapellidom :$("#txb_apellidoM").val()
    },
    success: function(){
      listar_personas();
    },

});

}

function eliminar($id){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_bienvenida/eliminar");?>",
    data:{
      vid :$id
    },
    success: function(){
      listar_personas();
    },

});

}

function limpiar_campos(){
  $("#txb_nombre").val("");
  $("#txb_apellidoP").val("");
  $("#txb_apellidoM").val("");
}


function listar_personas(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_bienvenida/obtener_todas_las_personas");?>",
    data:{
    },
    success: function(personas){
      crear_tabla_personas(personas);
    },
    dataType:'json'
});

}

function buscar_personas($id){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_bienvenida/obtener_persona");?>",
    data:{
      vid :$id
    },
    success: function(persona){
      llenar_campos(persona);
    },
    dataType:'json'
});

}

function llenar_campos(persona){

  $("#txb_nombre").val(persona[0].nombres);
  $("#txb_apellidoP").val(persona[0].apellidop);
  $("#txb_apellidoM").val(persona[0].apellidom);

}


function crear_tabla_personas(personas){
    if(personas.length >0)
    {

      var tabla_dinamica="<table class='table table-striped'>";
      tabla_dinamica+="";
      
      tabla_dinamica+="<tr>";
      tabla_dinamica+="<th>Nombres</th>";
      tabla_dinamica+="<th>Apellido paterno</th>";
      tabla_dinamica+="<th>Apellido materno</th>";
      tabla_dinamica+="<th>Opciones</th>";
      tabla_dinamica+="</tr>";
      tabla_dinamica+="<tbody id='myTable'>";
      
      
      var i;
      for(i=0;i<personas.length;i++)
      {
        tabla_dinamica+="<tr>";
        tabla_dinamica+="<td>"+personas[i].nombres;+"</td>";
        tabla_dinamica+="<td>"+personas[i].apellidop;+"</td>";
        tabla_dinamica+="<td>"+personas[i].apellidom;+"</td>";
        tabla_dinamica+="<td><div class='container-button'> <div><button type='button' class='button-table' onclick='eliminar("+personas[i].id+")'>Eliminar</button></div><div><button type='button' class='button-table' onclick='buscar_personas("+personas[i].id+")'>Editar</button></div><div><button type='button' class='button-table' onclick='guardar_cambios("+personas[i].id+")'>Guardar Cambios</button></div></div></td>";
        tabla_dinamica+="</tr>";
      }
      tabla_dinamica+="</tbody>";
      tabla_dinamica+="</table>";
      
      
      $("#tabla_personas").html(tabla_dinamica);
      
      
    }
    else
    {
        $("#tabla_personas").html('<div class="alert alert-info"><strong> No hay datos que mostrar<strong></div>');
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


<footer></footer>
</body>




</html>
