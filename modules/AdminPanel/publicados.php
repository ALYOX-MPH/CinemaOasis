<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel Admin - CineMovies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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

  <img class="d-block mx-auto mb-4" src="modules\img\logo.png" alt="" style="
      width: 350px; height: 170px; padding: 10px; ">
      
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
  
<h2 class="text-center mt-4 p-2">Lista de Agregados</h2>
    <table class="container table table-bordered border border-2 rounded align-middle mt-5">
                <thead class="table-light  border border-2 rounded">
                    <tr>
                        <!-- Nombre -->
                         <th scope="col"></th>
                            <th scope="col">Img</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Hora de función</th>
                            <th scope="col">Días de la función</th>
                            <th scope="col">Salas</th>
                            <th scope="col">Fecha límite de publicación</th>
                            <th scope="col">Fecha límite de salida</th>
                            <th scope="col">Acciones</th>

                    </tr>
                </thead>

                <tbody>

                        <tr>
                            <td><input type="checkbox" name="ids[]"></td>
                            <td><img src="../img/lilo.jpeg"  alt="Image" style="height: 90px; width: 90px;"></td>
                            <td>Cartelera</td>
                            <td>4:00 PM</td>                            
                            <td>Lunes</td>                            
                            <td>Sala 1</td>                            
                            <td>20/07/2025</td>                            
                            <td>21/07/2025</td>

                            <!-- Actions -->
                            <td><button type="button" class="btn btn-danger suspend-button" data-id="<?= $Employee['id'] ?>">
                                <i class="bi bi-trash3"></i></button></td>

                        </tr>

                        <tr>
                            <td><input type="checkbox" name="ids[]"></td>
                            <td><img src="../img/avenger.jpg"  alt="Image" style="height: 90px; width: 90px;"></td>
                            <td>Cartelera</td>
                            <td>4:00 PM</td>                            
                            <td>Lunes</td>                            
                            <td>Sala 1</td>                            
                            <td>20/07/2025</td>                            
                            <td>21/07/2025</td>

                            <!-- Actions -->
                            <td><button type="button" class="btn btn-danger suspend-button" data-id="<?= $Employee['id'] ?>">
                                <i class="bi bi-trash3"></i></button></td>

                        </tr>

                        <tr>
                            <td><input type="checkbox" name="ids[]"></td>
                            <td><img src="../img/imposible.jpg"  alt="Image" style="height: 90px; width: 90px;"></td>
                            <td>Cartelera</td>
                            <td>4:00 PM</td>                            
                            <td>Lunes</td>                            
                            <td>Sala 1</td>                            
                            <td>20/07/2025</td>                            
                            <td>21/07/2025</td>

                            <!-- Actions -->
                            <td><button type="button" class="btn btn-danger suspend-button" data-id="<?= $Employee['id'] ?>">
                                <i class="bi bi-trash3"></i></button></td>

                        </tr>

                        <tr>
                            <td><input type="checkbox" name="ids[]"></td>
                            <td><img src="../img/ironman.jpg"  alt="Image" style="height: 90px; width: 90px;"></td>
                            <td>Cartelera</td>
                            <td>4:00 PM</td>                            
                            <td>Lunes</td>                            
                            <td>Sala 1</td>                            
                            <td>20/07/2025</td>                            
                            <td>21/07/2025</td>

                            <!-- Actions -->
                            <td><button type="button" class="btn btn-danger suspend-button" data-id="<?= $Employee['id'] ?>">
                                <i class="bi bi-trash3"></i></button></td>

                        </tr>

                        <tr>
                            <td><input type="checkbox" name="ids[]"></td>
                            <td><img src="../img/lilo.jpeg"  alt="Image" style="height: 90px; width: 90px;"></td>
                            <td>Cartelera</td>
                            <td>4:00 PM</td>                            
                            <td>Lunes</td>                            
                            <td>Sala 1</td>                            
                            <td>20/07/2025</td>                            
                            <td>21/07/2025</td>

                            <!-- Actions -->
                            <td><button type="button" class="btn btn-danger suspend-button" data-id="<?= $Employee['id'] ?>">
                                <i class="bi bi-trash3"></i></button></td>

                        </tr>
                </tbody>
            </table>

    

</body>
<!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

</html>
