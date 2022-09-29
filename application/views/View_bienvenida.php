<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="./css/styleViewBienvenida.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    *{
      margin: 0px;
      padding: 0;
      box-sizing: border-box;
    }
    body{
      margin: 0;
      font-family: 'Arenas movedizas'
    }
    .form-container{
      margin: 40px 0px;
    }

    .button-guardar{
      margin-bottom: 30px;
    }
    .main-input{
      margin-top:20px;
      width: 90%;
      margin: 0 auto;
      margin-bottom: 35px;
    }

    .main-input-container{
      
      border-radius: 10px;
      border: 1px solid #dfe1e5;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .input-search{
      width:90%;
      height: 50px;
      border: none;
      outline: none;
    }

    .main-input-container:hover {
      box-shadow: 0 1px 3px 0 #20212447;
      border-color: #dfe1e500;
    }

    .main-input .search-icon{
    width: 18px;
    height: 18px;
    }

/* botones modificar */
    .container-button{
      margin: 0 auto;
      
    }

    .container-button div{
      display: inline-block;
    } 
    button{
      height: 36px;
      background-color: #f2f2f2;
      border: 0;
      font-size: 14px;
      color: #5f6368;
      border-radius: 5px ;
      padding: 0 15px;
      margin-right: 15px;
    }
    button:hover{
      border: 1px solid #c6c6c6;
      box-shadow: 0 1px black;
      color: #222
    }
    .button-guardar{
      display:flex;
      aling
    }



  </style>
</head>

<body>
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
    <button class="button-guardar" onclick="guardar()">Guardar</button>
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
</body>




</html>
