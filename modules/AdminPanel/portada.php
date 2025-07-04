<!DOCTYPE html>
<html lang="en">
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

    .card-hover {
    transition: all 0.3s ease-in-out;
}

.card-hover:hover {
    box-shadow: 0 0 15px rgba(0, 128, 0, 0.5); /* Sombra verde */
    border-color: #198754; /* Verde Bootstrap más oscuro */
    transform: scale(1.01); /* Efecto de zoom leve */
    cursor: pointer;
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

  <!-- Portada -->
<div class="container mt-4">
 <div class="row row-cols-12 row-cols-md-3 g-4">
    <div class="col-md-12 text-center border border-2 rounded border-success" style="height: auto;">
    <h2 class="text-center pt-4">Subir Portada</h2>
    <p>Sube una imagen de la portada de tu película con un ancho de 1920px y un alto de 1080px</p>
    <i class="bi bi-image-fill text-success fs-5"></i>

    <!-- Imagen vista previa -->
    <div id="preview-container" class="my-3 d-none">
        <img id="preview-image" src="#" alt="Vista previa" class="img-fluid rounded shadow" style="max-width: 100%; height: auto; max-height: 400px;">
    </div>

    <!-- Formulario -->
    <div class="row g-2 justify-content-center text-center">
        <div class="col-12 d-flex justify-content-center">
            <input type="file" class="form-control" id="image-input" style="width: 500px;">
        </div>
        <div class="col-12 d-flex justify-content-center ">
            <label for="titulo" class="form-label fs-5">Título de la película
                <input type="text" id="titulo" class="form-control bg-dark text-white" style="width: 300px;">
            </label>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <label for="descripcion" class="form-label fs-5">Descripción de la película
                <input type="text" id="descripcion" class="form-control bg-dark text-white" style="width: 300px;">
            </label>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-success mb-3" style="width: 150px;">Subir</button>
        </div>
    </div>
</div>


    <!-- Película 1 -->
    <div class="col-md-12 text-center border border-2 rounded border-success card-hover">
    <img src="modules\img\ironman.jpg" class="d-block w-100 mb-4" alt="Película 1" style="object-fit: cover; width: 100%; height: 300px;">
    <div class=" d-none d-md-block">
          <h5>Godzilla x Kong: The New Empire</h5>
          <p>Dos titanes, una batalla épica.</p>
        </div>
    <button type="button" class="btn btn-success suspend-button fs-5 mb-3 me-5" style="width: 60px; height: 60px;" ><i class="bi bi-pencil-fill"></i></button>
    <button type="button" class="btn btn-danger suspend-button fs-5 mb-3" style="width: 60px; height: 60px;"><i class="bi bi-trash3"></i></button> 
 </div>

 <!-- Película 2 -->
 <div class="col-md-12 text-center border border-2 rounded border-success card-hover">
    <img src="../img/avenger.jpg" class="d-block w-100 mb-4" alt="Película 1" style="object-fit: cover; width: 100px; height: 300px;">
    <div class=" d-none d-md-block">
          <h5>Godzilla x Kong: The New Empire</h5>
          <p>Dos titanes, una batalla épica.</p>
    </div>
    <button type="button" class="btn btn-success suspend-button fs-5 mb-3 me-5 " style="width: 60px; height: 60px;"><i class="bi bi-pencil-fill"></i></button>
    <button type="button" class="btn btn-danger suspend-button fs-5 mb-3" style="width: 60px; height: 60px;"><i class="bi bi-trash3"></i></button>
 </div>

 <!-- Película 3 -->
 <div class="col-md-12 text-center border border-2 rounded border-success card-hover">
    <img src="../img/imposible.jpg" class="d-block w-100" alt="Película 1" style="object-fit: cover; width: 100%; height: 300px;">
    <div class=" d-none d-md-block">
          <h5>Godzilla x Kong: The New Empire</h5>
          <p>Dos titanes, una batalla épica.</p>
    </div>
    <button type="button" class="btn btn-success suspend-button fs-5 mb-3 me-5 " style="width: 60px; height: 60px;"><i class="bi bi-pencil-fill"></i></button>
    <button type="button" class="btn btn-danger suspend-button fs-5 mb-3" style="width: 60px; height: 60px;"><i class="bi bi-trash3"></i></button>
 </div>


</body>
<!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<script>
    const imageInput = document.getElementById('image-input');
    const previewContainer = document.getElementById('preview-container');
    const previewImage = document.getElementById('preview-image');

    imageInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();

            previewContainer.classList.remove('d-none');

            reader.addEventListener('load', function () {
                previewImage.setAttribute('src', this.result);
            });

            reader.readAsDataURL(file);
        } else {
            previewContainer.classList.add('d-none');
        }
    });
</script>
</html>