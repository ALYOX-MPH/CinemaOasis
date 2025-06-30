<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CineMovies Bonao</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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



  <!-- barra de búsqueda -->
   <div class="container mt-5">
    <h2 class="text-center mb-4">Próximamente</h2>
  <div class="input-group mb-3">
  <input type="text" class="form-control bg-dark text-white" placeholder="Buscar película" aria-label="Search" id="busqueda">
  <button class="btn btn-outline-secondary" type="button" id="button-addon2">
    <i class="bi bi-search bg-black"></i>
  </button>
</div>
</div>
 

<!-- Estrenos -->
<div class="container mt-5">
    <hr class="mb-4" style="border-top: 2px solid white;">
    <!-- Película futura 1 -->
    <div class="row align-items-center">
      <!-- Imagen -->
       <h2 class="text-center mt-4">Avengers Secret Wars</h2>
    <div class="col-md-4 text-center">
      <img src="https://image.tmdb.org/t/p/w500/f0YBuh4hyiAheXhh4JnJWoKi9g5.jpg" class="img-fluid rounded shadow">
    </div>
    <!-- Info -->
    <div class="col-md-8">
      <p><strong>GÉNERO:</strong>Peleas</p>
      <p><strong>ESTRENO:</strong> 25 de julio 2025</p>
      <p><strong>PROTAGONISTAS:</strong> Avengers</p>
      <p><strong>DIRECTOR:</strong>Kevin Feige</p>
      <p><strong>PRODUCTOR:</strong>Marvel Studios</p>
      <p><strong>SINOPSIS:</strong>Un grupo de avengers se unen para vencer a Thanos y salvar el universo.</p>
    </div>
  </div>
    <div class=" mt-4">
        <a href="#" class="btn btn-danger px-4 py-2 fs-5 ms-5 rounded-pill">VER HORARIOS y más detalles</a>
    </div>

   

    <!-- Película futura 2 -->
    <div class="container text-white mt-5">
     <hr class="mb-4" style="border-top: 2px solid white;">
        <div class="row align-items-center">
            <!-- Imagen -->
             <h2 class="text-center mt-4">Superman</h2>
            <div class="col-md-4 text-center">
            <img src="https://image.tmdb.org/t/p/w500/waa6v1VKBbOGzWku7OpwmQw2uEf.jpg" class="img-fluid rounded shadow" alt="Deadpool & Wolverine">
            </div>
            <div class="col-md-8">
            <p><strong>GÉNERO:</strong> Acción / Comedia</p>
            <p><strong>ESTRENO:</strong> 25 de julio 2025</p>
            <p><strong>PROTAGONISTAS:</strong> Ryan Reynolds, Hugh Jackman</p>
            <p><strong>DIRECTOR:</strong> Shawn Levy</p>
            <p><strong>PRODUCTOR:</strong> Kevin Feige, Ryan Reynolds</p>
            <p><strong>SINOPSIS:</strong> Una nueva era de humor y acción con los antihéroes más esperados.</p>
            </div>
        </div>
        <div class=" mt-4">
        <a href="#" class="btn btn-danger px-4 py-2 fs-5 ms-5 rounded-pill">VER HORARIOS y más detalles</a>
        </div>
    </div>


    <!-- Película futura 3 -->
     <div class="container text-white mt-5">
     <hr class="mb-4" style="border-top: 2px solid white;">
        <div class="row align-items-center">
            <!-- Imagen -->
             <h2 class="text-center mt-4">Avengers Doomsday</h2>
            <div class="col-md-4 text-center">
            <img src="https://image.tmdb.org/t/p/w500/6eB2oh1SplddsZYCdayrIdrIGLd.jpg" class="img-fluid rounded shadow" alt="Deadpool & Wolverine">
            </div>
            <div class="col-md-8">
            <p><strong>GÉNERO:</strong> Acción / Comedia</p>
            <p><strong>ESTRENO:</strong> 25 de julio 2025</p>
            <p><strong>PROTAGONISTAS:</strong> Ryan Reynolds, Hugh Jackman</p>
            <p><strong>DIRECTOR:</strong> Shawn Levy</p>
            <p><strong>PRODUCTOR:</strong> Kevin Feige, Ryan Reynolds</p>
            <p><strong>SINOPSIS:</strong> Una nueva era de humor y acción con los antihéroes más esperados.</p>
            </div>
        </div>
        <div class=" mt-4">
        <a href="#" class="btn btn-danger px-4 py-2 fs-5 ms-5 rounded-pill">VER HORARIOS y más detalles</a>
        </div>
     <hr class="mt-4" style="border-top: 2px solid white;">
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
