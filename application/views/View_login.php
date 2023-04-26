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
</body>

</html>
