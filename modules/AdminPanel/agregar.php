<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agregar Panel Admin - CineMovies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />

  <style>
    body {
      background-color: #111;
      color: white;
    }
    .card {
      background-color: #e0dada;
    }
    input, textarea, select {
      background-color: #222 !important;
      color: white !important;
    }
  </style>
</head>
<body>

  <img class="d-block mx-auto mb-4" src="modules\img\logo.png" alt="" style="width: 350px; height: 170px; padding: 10px;">

  <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mx-auto d-flex gap-4">
          <li class="nav-item" style="font-size: 30px;"><a class="nav-link" href="/admin">Inicio</a></li>
          <li class="nav-item" style="font-size: 30px;"><a class="nav-link" href="/agregar">Agregar</a></li>
          <li class="nav-item" style="font-size: 30px;"><a class="nav-link" href="/publicados">Publicados</a></li>
          <li class="nav-item" style="font-size: 30px;"><a class="nav-link" href="/portada">Portada</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container pt-5">
    <h2 class="text-center mb-4">Agregar Película</h2>

    <!-- Buscar película -->
    <div class="card p-3 mb-4">
      <h5><i class="bi bi-search p-2"></i>Buscar película</h5>
      <div class="input-group">
        <input type="text" id="busqueda" class="form-control" placeholder="Ej: The Batman">
        <button class="btn btn-primary" onclick="buscarPelicula()">Buscar</button>
      </div>
    </div>

    <!-- Resultado automático -->
    <div id="resultado" class="card p-3 d-none">
      <h5>Datos encontrados:</h5>
      <div class="row">
        <div class="col-md-4">
          <img id="poster" src="" class="img-fluid rounded shadow" alt="Poster película">
        </div>
        <div class="col-md-8">
          <h4 id="titulo"></h4>
          <p id="descripcion"></p>
          <p><strong>Estreno:</strong> <span id="fecha"></span></p>

          <!-- Nav Tabs -->
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-cartelera-tab" data-bs-toggle="tab" data-bs-target="#nav-cartelera" type="button" role="tab" aria-controls="nav-cartelera" aria-selected="true">Cartelera</button>
              <button class="nav-link" id="nav-estrenos-tab" data-bs-toggle="tab" data-bs-target="#nav-estrenos" type="button" role="tab" aria-controls="nav-estrenos" aria-selected="false">Estrenos</button>
            </div>
          </nav>

          <div class="tab-content mt-2">
            <!-- Cartelera -->
            <div class="tab-pane fade show active" id="nav-cartelera" role="tabpanel" aria-labelledby="nav-cartelera-tab">
              <div class="mt-2">
                <label for="horas" class="form-label">Horas de la función</label>
                <select id="horas" multiple>
                  <option>4 PM</option><option>4:30 PM</option><option>5 PM</option><option>5:30 PM</option>
                  <option>6 PM</option><option>6:30 PM</option><option>7 PM</option><option>7:30 PM</option>
                  <option>8 PM</option><option>8:30 PM</option><option>9 PM</option><option>9:30 PM</option>
                  <option>10 PM</option><option>10:30 PM</option>
                </select>
              </div>

              <div class="mt-2">
                <label for="dias" class="form-label">Días de la función</label>
                <select id="dias" multiple>
                  <option>Lunes</option><option>Martes</option><option>Miércoles</option>
                  <option>Jueves</option><option>Viernes</option><option>Sábado</option><option>Domingo</option>
                </select>
              </div>

              <div class="mt-2">
                <label for="salas" class="form-label">Salas</label>
                <select id="salas" multiple>
                  <option>Sala 1</option><option>Sala 2</option><option>Sala 3</option>
                </select>
              </div>

              <label class="form-label mt-2 ">Tiempo límite de publicación</label>
              <input type="date" class="form-control bg-white text-dark" id="inputGroupSelect01">

              <button class="btn btn-success mt-3" onclick="agregarACartelera()">Agregar a cartelera</button>
            </div>

            <!-- Estrenos -->
            <div class="tab-pane fade" id="nav-estrenos" role="tabpanel" aria-labelledby="nav-estrenos-tab">
              <label class="form-label mt-2">Fecha de estreno</label>
              <input type="date" class="form-control">
              <button class="btn btn-success mt-3" onclick="agregarACartelera()">Agregar a cartelera</button>
            </div>

            
          </div>
        </div>
      </div>
    </div>

    <!-- Cartelera temporal -->
    <div class="mt-5">
      <h4><i class="bi bi-film p-2"></i>Películas cargadas
    <button class="btn btn-success "> <a class="text-white " href="../LandingPage/index.html">Vista previa</a></button>
    </h4>
      <ul id="listaCartelera" class="list-group text-dark"></ul>
      <button class="btn btn-danger mt-3">Agregar a Página</button>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

  <script>
    async function buscarPelicula() {
      const busqueda = document.getElementById("busqueda").value.trim();
      if (!busqueda) return alert("Escribe el nombre de la película.");

      const apiKey = "5091fe6d71c80a140b9a82c6d745da23";
      const resp = await fetch(`https://api.themoviedb.org/3/search/movie?api_key=${apiKey}&language=es&query=${encodeURIComponent(busqueda)}`);
      const data = await resp.json();
      if (!data.results.length) return alert("Película no encontrada.");

      const p = data.results[0];
      document.getElementById("poster").src = p.poster_path ? `https://image.tmdb.org/t/p/w500${p.poster_path}` : "";
      document.getElementById("titulo").innerText = p.title;
      document.getElementById("descripcion").innerText = p.overview;
      document.getElementById("fecha").innerText = p.release_date;
      document.getElementById("resultado").classList.remove("d-none");
    }

    function agregarACartelera() {
      const titulo = document.getElementById("titulo").innerText;

      const horas = Array.from(document.getElementById("horas").selectedOptions).map(opt => opt.value);
      const dias = Array.from(document.getElementById("dias").selectedOptions).map(opt => opt.value);
      const salas = Array.from(document.getElementById("salas").selectedOptions).map(opt => opt.value);

      if (!titulo || horas.length === 0 || dias.length === 0 || salas.length === 0) {
        return alert("Por favor, completa todos los campos.");
      }

      const li = document.createElement("li");
      li.className = "list-group-item";
      li.innerHTML = `<strong>${titulo}</strong><br>Horarios: ${horas.join(', ')}<br>Días: ${dias.join(', ')}<br>Salas: ${salas.join(', ')}`;

      document.getElementById("listaCartelera").appendChild(li);
      document.getElementById("busqueda").value = "";
      document.getElementById("resultado").classList.add("d-none");
    }

    new Choices("#horas", { removeItemButton: true, placeholder: true, searchEnabled: false });
    new Choices("#dias", { removeItemButton: true, placeholder: true, searchEnabled: false });
    new Choices("#salas", { removeItemButton: true, placeholder: true, searchEnabled: false });
  </script>
</body>
</html>
