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


  <!-- Slider de películas destacadas -->
  <div id="destacadas" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="width: 100%; height: 400px; overflow: hidden;">
        <img src="modules\img\avenger.jpg" class="d-block w-100" alt="Película 1" style="object-fit: cover; width: 100%; height: 100%;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Godzilla x Kong: The New Empire</h5>
          <p>Dos titanes, una batalla épica.</p>
        </div>
      </div>

      <div class="carousel-item" >
        <div style="width: 100%; height: 400px; overflow: hidden;">
        <img src="modules\img\ironman.jpg" class="d-block w-100" alt="Película 2" style="object-fit: cover; height: 100%;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Dune Parte 2</h5>
          <p>El futuro de Arrakis está en juego.</p>
        </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#destacadas" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#destacadas" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  

 <!-- Cartelera -->
  <div class="container mt-5" >
<h2 class="text-center mb-4 p-5">🎥 Cartelera</h2>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <!-- Primer grupo de películas -->
    <div class="carousel-item active">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card text-white">
            <img src="https://image.tmdb.org/t/p/w500/rktDFPbfHfUbArZ6OOOKsXcv0Bm.jpg" class="card-img-top" alt="Película" style="height: 350px;">
            <div class="card-body">
              <h5 class="card-title">The Batman</h5>
              <p class="card-text">Bruce Wayne combate el crimen en Gotham enfrentando nuevos enemigos.</p>
              <p><strong>Horarios:</strong> 3:00 PM | 6:30 PM | 9:15 PM</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white">
            <img src="https://image.tmdb.org/t/p/w500/rktDFPbfHfUbArZ6OOOKsXcv0Bm.jpg" class="card-img-top" alt="Película" style="height: 350px;">
            <div class="card-body">
              <h5 class="card-title">Avengers: Endgame</h5>
              <p class="card-text">Los héroes se unen para vencer a Thanos y salvar el universo.</p>
              <p><strong>Horarios:</strong> 4:00 PM | 7:00 PM | 10:00 PM</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white">
            <img src="https://image.tmdb.org/t/p/w500/3LShl6EwqptKIVq6NWOZ0FbZHEe.jpg" class="card-img-top" alt="Película" style="height: 350px;">
            <div class="card-body">
              <h5 class="card-title">Super Mario Bros</h5>
              <p class="card-text">Mario y Luigi en una aventura para salvar el Reino Champiñón.</p>
              <p><strong>Horarios:</strong> 2:30 PM | 5:30 PM | 8:30 PM</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Segundo grupo (otra página del carrusel) -->
   <div class="carousel-item">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card text-white">
            <img src="https://image.tmdb.org/t/p/w500/mbry0W5PRylSUHsYzdiY2FSJwze.jpg" class="card-img-top" alt="Película" style="height: 350px;">
            <div class="card-body">
              <h5 class="card-title">Super Mario Bros</h5>
              <p class="card-text">Mario y Luigi en una aventura para salvar el Reino Champiñón.</p>
              <p><strong>Horarios:</strong> 2:30 PM | 5:30 PM | 8:30 PM</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white">
            <img src="https://image.tmdb.org/t/p/w500/miZFgV81xG324rpUknQX8dtXuBl.jpg" class="card-img-top" alt="Película" style="height: 350px;">
            <div class="card-body">
              <h5 class="card-title">Super Mario Bros</h5>
              <p class="card-text">Mario y Luigi en una aventura para salvar el Reino Champiñón.</p>
              <p><strong>Horarios:</strong> 2:30 PM | 5:30 PM | 8:30 PM</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white">
            <img src="https://image.tmdb.org/t/p/w500/3LShl6EwqptKIVq6NWOZ0FbZHEe.jpg" class="card-img-top" alt="Película" style="height: 350px;">
            <div class="card-body">
              <h5 class="card-title">Super Mario Bros</h5>
              <p class="card-text">Mario y Luigi en una aventura para salvar el Reino Champiñón.</p>
              <p><strong>Horarios:</strong> 2:30 PM | 5:30 PM | 8:30 PM</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>

  <!-- Botones de control -->
  <button class="carousel-control-prev"  type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<!-- Estrenos -->
<div class="container mt-5" style="background-color: #4e1616;">
  <h2 class="text-center mb-4">🎬 Estrenos</h2>
  <div class="row g-4">
    <!-- Película futura 1 -->
    <div class="col-md-4">
      <div class="card text-white">
        <img src="https://image.tmdb.org/t/p/w500/waa6v1VKBbOGzWku7OpwmQw2uEf.jpg" class="card-img-top" alt="Película futura" style="height: 350px;">
        <div class="card-body">
          <h5 class="card-title">Deadpool & Wolverine</h5>
          <p class="card-text">Una nueva era de humor y acción con los antihéroes más esperados.</p>
          <p><strong>Estreno:</strong> 25 de julio 2025</p>
        </div>
      </div>
    </div>

    <!-- Película futura 2 -->
    <div class="col-md-4">
      <div class="card text-white">
        <img src="https://image.tmdb.org/t/p/w500/f0YBuh4hyiAheXhh4JnJWoKi9g5.jpg" class="card-img-top" alt="Película futura" style="height: 350px;">
        <div class="card-body">
          <h5 class="card-title">Inside Out 2</h5>
          <p class="card-text">Riley crece... y también sus emociones. Una nueva aventura emocional.</p>
          <p><strong>Estreno:</strong> 15 de agosto 2025</p>
        </div>
      </div>
    </div>

    <!-- Película futura 3 -->
    <div class="col-md-4">
      <div class="card text-white">
        <img src="https://image.tmdb.org/t/p/w500/6eB2oh1SplddsZYCdayrIdrIGLd.jpg" class="card-img-top" alt="Película futura" style="height: 350px;">
        <div class="card-body">
          <h5 class="card-title">Minions 3</h5>
          <p class="card-text">Los minions regresan con otra misión ridículamente divertida.</p>
          <p><strong>Estreno:</strong> 1 de septiembre 2025</p>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- Próximamente -->
<div class="container mt-5">
  <h2 class="text-center mb-4">🎬 Próximamente</h2>
  <div class="row g-4">
    <!-- Película futura 1 -->
    <div class="col-md-4">
      <div class="card text-white">
        <img src="https://image.tmdb.org/t/p/w500/waa6v1VKBbOGzWku7OpwmQw2uEf.jpg" class="card-img-top" alt="Película futura" style="height: 350px;">
        <div class="card-body">
          <h5 class="card-title">Deadpool & Wolverine</h5>
          <p class="card-text">Una nueva era de humor y acción con los antihéroes más esperados.</p>
          <p><strong>Estreno:</strong> 25 de julio 2025</p>
        </div>
      </div>
    </div>

    <!-- Película futura 2 -->
    <div class="col-md-4">
      <div class="card text-white">
        <img src="https://image.tmdb.org/t/p/w500/f0YBuh4hyiAheXhh4JnJWoKi9g5.jpg" class="card-img-top" alt="Película futura" style="height: 350px;">
        <div class="card-body">
          <h5 class="card-title">Inside Out 2</h5>
          <p class="card-text">Riley crece... y también sus emociones. Una nueva aventura emocional.</p>
          <p><strong>Estreno:</strong> 15 de agosto 2025</p>
        </div>
      </div>
    </div>

    <!-- Película futura 3 -->
    <div class="col-md-4">
      <div class="card text-white">
        <img src="https://image.tmdb.org/t/p/w500/6eB2oh1SplddsZYCdayrIdrIGLd.jpg" class="card-img-top" alt="Película futura" style="height: 350px;">
        <div class="card-body">
          <h5 class="card-title">Minions 3</h5>
          <p class="card-text">Los minions regresan con otra misión ridículamente divertida.</p>
          <p><strong>Estreno:</strong> 1 de septiembre 2025</p>
        </div>
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
