<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel Admin - CineMovies</title>
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
<body class="">

  <img class="d-block mx-auto mb-4" src="../img/logo.png" alt="" style="
      width: 350px; height: 170px; padding: 10px; ">
      
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mx-auto d-flex gap-4">
          <li class="nav-item" style="font-size: 30px;"><a class="nav-link" href="admin.html">Inicio</a></li>
          <li class="nav-item" style="font-size: 30px;"><a class="nav-link" href="agregar.html">Agregar</a></li>
          <li class="nav-item" style="font-size: 30px;"><a class="nav-link" href="publicados.html">Publicados</a></li>
          <li class="nav-item" style="font-size: 30px;"><a class="nav-link" href="portada.html">Portada</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
    <!-- algo -->
 <div class="container-xl border border-2 rounded mt-0  border-top border-bottom mt-4">
                <div class="row mt-2 pt-3 d-flex justify-content-center">

                    <div class="col-4 text-center border-end">
                        <h3><i class="bi bi-people-fill pe-2"></i>Carteleras</h3>
                        <p class="text-success fs-4">52</p>
                        <p class="pt--5">Peliculas</p>
                    </div>


                    <div class="col-4 text-center border-end">
                        <h3><i class="bi bi-person-fill-check pe-2"></i>Extrenos</h3>
                        <p class="text-success fs-4">20</p>
                        <p class="pt--5">Peliculas</p>
                    </div>

                    <div class="col-4 text-center">
                        <h3><i class="bi bi-person-fill-slash pe-2"></i>Proximamente</h3>
                        <p class="text-success fs-4">10</p>
                        <p class="pt--5">Peliculas</p>
                    </div>

                </div>
            </div>
            <!-- algo2 -->
  <div class="container mt-4">
    <div class="row mt-2 pt-2 d-flex justify-content-center">
        <div class="col-4 bg-dark rounded p-3 text-center border mb-3 ">
          <h3 class="text-danger">Distribución de Estrenos</h3>
          <canvas id="pieChart" height="180"></canvas>
        </div>
      <div class="col-lg bg-dark rounded p-3 text-center border mb-3 ">  
        <h3 class="text-success">Películas por mes</h3>
        <canvas id="barChart" height="180"></canvas>
        </div>
      </div>
    </div>

<!-- CDN Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // Gráfico circular
  const pieCtx = document.getElementById('pieChart').getContext('2d');
  new Chart(pieCtx, {
    type: 'doughnut',
    data: {
      labels: ['Estrenos', 'Cartelera', 'Próximamente'],
      datasets: [{
        label: 'Películas',
        data: [20, 52, 10],
        backgroundColor: ['#ffc107', '#0d6efd', '#dc3545'],
        borderWidth: 1
      }]
    },
    options: {
      plugins: { legend: { position: 'bottom', labels: { color: 'white' } } }
    }
  });

  // Gráfico de barras
  const barCtx = document.getElementById('barChart').getContext('2d');
  new Chart(barCtx, {
    type: 'bar',
    data: {
      labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
      datasets: [{
        label: 'Películas agregadas',
        data: [5, 7, 3, 6, 8, 9],
        backgroundColor: '#0dcaf0',
        borderRadius: 5
      }]
    },
    options: {
      scales: {
        x: { ticks: { color: 'white' } },
        y: { ticks: { color: 'white' }, beginAtZero: true }
      },
      plugins: {
        legend: { labels: { color: 'white' } }
      }
    }
  });
</script>

</body>
<!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
</html>
