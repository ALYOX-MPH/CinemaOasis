<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - CineMovies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #121212;
      color: white;
    }
    .login-container {
      max-width: 400px;
      margin: 100px auto;
      background-color: #1e1e1e;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }
  </style>
</head>
<body>

  <div class="login-container text-center">
    <img src="modules\img\logo.png" alt="logo" style="width: 100%; height: 100%;">
    <div class="form-group mb-3 text-start">
      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" class="form-control" placeholder="admin">
    </div>
    <div class="form-group mb-4 text-start">
      <label for="clave">Contraseña</label>
      <input type="password" id="clave" class="form-control" placeholder="1234">
    </div>
    <button onclick="iniciarSesion()" class="btn btn-danger w-100">Iniciar sesión</button>
    <p id="mensaje" class="mt-3 text-danger"></p>
  </div>

  <script>
    function iniciarSesion() {
      const user = document.getElementById("usuario").value.trim();
      const pass = document.getElementById("clave").value.trim();

      if (user === "admin" && pass === "1234") {
        window.location.href = "admin.html"; // ← Aquí va tu panel
      } else {
        document.getElementById("mensaje").innerText = "Credenciales incorrectas.";
      }
    }
  </script>
</body>
</html>
