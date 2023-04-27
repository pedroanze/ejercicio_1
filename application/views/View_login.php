<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="<?php echo base_url('./css/styleLogin.css'); ?>">

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
        body {
    background-color: #f1f1f1;
    font-family: Arial, sans-serif;
  }

  h2 {
    text-align: center;
    margin-top: 50px;
  }

  #login-form {
    max-width: 300px;
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

  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border-radius: 3px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    margin-bottom: 20px;
  }

  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-bottom:20px;
  }

  input[type="submit"]:hover {
    background-color: #45a049;

  }

  @keyframes fade-in {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
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
  <h2>Iniciar sesión</h2>
  
  <form id="login-form">
    <label for="username">Nombre de usuario:</label>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" value="Iniciar sesión">

    <?php echo anchor('ctrl_datos', 'Ver datos'); ?>
  </form>

  <script>
    $(document).ready(function() {
      $("#login-form").submit(function(event) {
        event.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();
        
        $.ajax({
          url: "Ctrl_login/autenticarUsuario",
          method: "POST",
          data: {
            username: username,
            password: password
          },
          success: function(response) {
            if (response === "success") {
              window.location.href = "Ctrl_catalogo";
            } else {
              alert("Error de autenticación. Usuario o contraseña incorrectos.");
            }
          }
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
