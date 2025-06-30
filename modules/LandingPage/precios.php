<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CineMovies Bonao</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #121212;
      color: white;
    }
    .card {
      background-color: #1e1e1e;
    }
    .navbar, .footer {
      background-color: #000;
    }
    .carousel-caption {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 1rem;
      border-radius: 10px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="modules\img\logo.png" alt="Logo" width="250px" height="90px" class="me-2">
    </a>

     <!-- Botón para dispositivos móviles -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú colapsable -->
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto d-flex gap-4">
        <li class="nav-item" style="font-size: 20px;"><a class="nav-link" href="/home">Inicio</a></li>
        <li class="nav-item"style="font-size: 20px;"><a class="nav-link" href="/cartelera">Cartelera</a></li>
        <li class="nav-item"style="font-size: 20px;"><a class="nav-link" href="/extrenos">Extrenos</a></li>
        <li class="nav-item"style="font-size: 20px;"><a class="nav-link" href="/proximamente">Próximamente</a></li>
        <li class="nav-item"style="font-size: 20px;"><a class="nav-link" href="/precios">Precios</a></li>
        <li class="nav-item"style="font-size: 20px;"><a class="nav-link" href="/contacto">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- SECCIÓN DE PRECIOS -->
<div class="container mt-5 text-white">
  <h2 class="text-center mb-4">Precios de Entradas</h2>

  <!-- Mensaje Importante -->
  <div class="alert alert-dark border border-warning text-center fs-6 mt-5" role="alert">
    🎬 Nota: Las palomitas y refrigerios no están incluidos en ninguno de los precios mostrados.
  </div>

  <div class="row g-4 justify-content-center">

    <!-- Estándar -->
    <div class="col-md-4">
      <div class="card bg-dark border border-success shadow text-center p-4 h-100">
        <i class="bi bi-ticket-perforated-fill fs-1 text-success mb-3"></i>
        <h4 class="text-white">Entrada Estándar</h4>
        <h3 class="text-success">$150</h3>
        <ul class="text-center mt-3 me-4 text-white">
          <p>Asientos reclinables</p>
          <p>Sonido envolvente</p>
          <p>Acceso a sala convencional</p>
        </ul>
      </div>
    </div>

    

    <!-- VIP -->
    <div class="col-md-4">
      <div class="card bg-dark border border-success shadow text-center p-4 h-100 text-white">
        <i class="bi bi-cup-hot-fill fs-1 text-warning mb-3"></i>
        <h4 class="text-white">Especial 2x1</h4>
        <h3 class="text-success">$150</h3>
        <h3 class="">Solo Miercoles</h3>
        <ul class="text-center mt-3 me-4 text-white">
          <p>Asientos reclinables</p>
          <p>Sonido envolvente</p>
          <p>Acceso a sala convencional</p>
        </ul>
      </div>
    </div>

    <!-- Sala 4D -->
    <div class="col-md-4">
      <div class="card bg-dark border border-warning shadow text-center p-4 h-100 text-white">
        <i class="bi bi-lightning-charge-fill fs-1 text-info mb-3"></i>
        <h4 class="text-white">VIP</h4>
        <h3 class="text-warning">$250</h3>
       <ul class="text-center mt-3 me-4 text-white">
          <p>Entrar sin hacer fila</p>
          <p>Asientos reclinables</p>
          <p>Sonido envolvente</p>
          <p>Acceso a sala convencional</p>
        </ul>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card bg-dark border border-info shadow text-center p-4 h-100 text-white">
        <i class="bi bi-lightning-charge-fill fs-1 text-info mb-3"></i>
        <h4 class="text-white">Rentar sala</h4>
        <h3 class="text-info">$10,000</h3>
       <ul class="text-center mt-3 me-4 text-white">
          <p>Acceso Total a la sala</p>
          <p>Capacida de 20 personas</p>
          <p class="text-danger">Seleccion de peliculas</p>
        </ul>
      </div>
    </div>

  </div>
</div>





  <!-- Footer -->
  <footer class="footer text-center py-4 mt-5 text-white">
    <p>&copy; 2025 CineMovies Bonao. Todos los derechos reservados.</p>
    <p><small>Ubicación: Bonao, República Dominicana</small></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
