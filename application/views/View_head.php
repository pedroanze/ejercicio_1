<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
      body {
      background-color: #f1f1f1;
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    .catalogo {
      text-align: center;
      margin-bottom: 20px;
    }

    .container {
      max-width: 60%;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      animation: fade-in 1s ease;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      margin-bottom: 20px;
    }

    .button-guardar-secundary {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .button-guardar-secundary:hover {
      background-color: #45a049;
    }

    #myInput {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      margin-bottom: 20px;
    }

    #tabla_productos {
      margin-top: 20px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      animation: fade-in 1s ease;
    }

    @keyframes fade-in {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
    .table {
  width: 100%;
  border-collapse: collapse;
  animation: fade-in 1s ease;
}

.table th,
.table td {
  padding: 8px;
  text-align: left;
}

.table th {
  background-color: #f2f2f2;
  font-weight: bold;
}

.table tr:nth-child(even) {
  background-color: #f9f9f9;
}

.boton-eliminar,
.boton-editar {
  padding: 6px 12px; 
  margin-left:20px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.boton-eliminar:hover,
.boton-editar:hover {
  background-color: #45a049;
}

.buscar{
  height: 41px;
}

.search-icon i {
  color: #aaa;
  font-size: 16px;
}


footer {
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
}

footer p {
  margin: 0;
  font-size: 14px;
  color: #888;
}


    </style>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-light">

</nav>