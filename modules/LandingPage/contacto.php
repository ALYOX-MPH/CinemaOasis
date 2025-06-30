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
    .navbar, .footer , #contacto {
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


<!-- SECCIÓN SOBRE NOSOTROS -->
<div class="container mt-5 text-white">
  <h1 class="text-center mb-4">Contacto</h1>
  <div class="text-center py-4 mb-5 text-white " id="contacto">
  <h3 class="text-center mb-3">Tel: (809) 296-0060</h3>
  <h3 class="text-center mb-3">Email: info@cine.com</h3>
  <h3 class="text-center ">Dirección: Calle San Lorenzo de los Santos 132, Bonao</h3>
  </div>
  <div class="row align-items-center">

   
    
    <!-- Imagen izquierda -->
    <div class="col-md-3 text-center mb-3">
      <img src="../img/contacto2.webp" class="img-fluid rounded shadow"  alt="Cine clásico">
    </div>
    
    <!-- Texto central -->
    <div class="col-md-6">
      <p class="fs-5 text-justify">
        Fundado en el corazón de la ciudad en 1985, nuestro cine ha sido testigo de generaciones de risas, emociones y sueños proyectados en una pantalla gigante. Empezamos como una pequeña sala con solo 30 asientos, y hoy contamos con tecnología de última generación, salas 4D y una comunidad de amantes del cine que no deja de crecer. Creemos en el poder del cine para unir personas, contar historias y crear recuerdos inolvidables. ¡Bienvenidos a su segundo hogar!
      </p>
    </div>
    
    <!-- Imagen derecha -->
    <div class="col-md-3 text-center mb-3">
      <img src="../img/contacto1.webp" class="img-fluid rounded shadow" alt="Cine moderno">
    </div>
  </div>
</div>

<!-- MAPA DE UBICACIÓN -->
<div class="container mt-5 text-white">
  <h2 class="text-center mb-4">Ubicación</h2>
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="ratio ratio-16x9">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.585824818172!2d-69.92978128473558!3d18.462184187442012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea561cab63610fd%3A0x9d5be7a2c7d2e39a!2sDowntown%20Center!5e0!3m2!1ses!2sdo!4v1654978826789!5m2!1ses!2sdo"
          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>
    </div>
  </div>
</div>

<!-- CONDICIONES Y TÉRMINOS -->
<div class="container mt-5 mb-5 text-white">
  <h2 class="text-center mb-4">Términos y Condiciones</h2>
  <div class="row justify-content-center">
    <div class="col-md-10">
      <p class="fs-6 text-center">
        Al hacer uso de nuestras instalaciones o adquirir boletos en línea, aceptas cumplir con nuestras políticas de comportamiento, horarios, y uso de los servicios. El cine se reserva el derecho de admisión y modificación de la cartelera sin previo aviso. Para más información, comunícate con nuestro equipo de atención al cliente o visita nuestras oficinas administrativas.
      </p>
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
