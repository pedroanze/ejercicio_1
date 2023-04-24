<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    
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

        .button-guardar-secundary{
        
        margin-bottom: 30px;
        width: 400px;
        height: 50px;
        font-size:20px;

        }
        .main-input{
        margin-top:20px;
        width: 90%;
        margin: 0 auto;
        margin-bottom: 35px;
        }
        .container-guardar-buscar{
        display:grid;
        align-items:center;
        justify-content: center;
        
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

        .search-icon{
        width: 1px;
        height: 1px;
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
        border: 1px solid #f2f2f2;
        }
        button:hover{

        border: 1px solid #c6c6c6;
        box-shadow: 0 1px black;
        color: #222
        }

        .nav-link{
          color: black;
          border: 1px solid white;
          margin-left: 8px;
          border-radius: 6px;
        }
        .nav-link:hover{
          color: #5f6368;
          border: 1px solid #c6c6c6;
          
    </style>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-light">

  <!-- Links -->
  <ul class="navbar-nav">

    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url("Ctrl_despedida/index");?>">Despedida</a>
    </li>
  </ul>

</nav>