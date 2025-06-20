<?php

use Modules\ProductServices\ProductServices;
?>
<!-- Menu Principal -->
<main class="row container-fluid justify-content-center mx-auto mt-5 ">

    <!-- CONTENEDOR  -->
    <div class="container col-11 mt-5">
        <!-- HEADER FUNCTION -->
        <div class="row">
            <div class="col-7">
                <h3 class="">Productos y Servicios</h3>
                <p>Crea, edita y administra cada detalle de tus productos y servicios.</p>
            </div>

            <!-- DROPDOWN INPORT AND EXPORT -->
            <div class=" col-2 dropdown">
                <a class="btn bg-white border border-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class=""></i>Mas acciones<i class="bi bi-arrow-up-right"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-end" style="min-width: 500px;">
                    <div class="row">
                        <li><a class="col-12 dropdown-item" href="#">
                                <h5>Importar desde Excel <i class="bi bi-box-arrow-up fs-4"></i></h5>
                                <p>Crea hasta 1.000 nuevos productos de venta desde un archivo de Excel</p>
                            </a></li>
                        <li><a class="col-12 dropdown-item border-top border-secondary" href="#">
                                <h5>Exportar <i class="bi bi-box-arrow-down fs-4"></i></h5>
                                <p>Extrae el listado completo de tus productos. </p>
                            </a></li>
                    </div>
                </ul>
            </div>

            </button>

            <!-- BUTTON ADD PRODUCT -->
            <div class="col-3">
                <button type="button" class="col-md-10 btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="bi bi-plus"></i>
                    Crear Producto/Servicio
                </button>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-2">
                <h5>Lista de Precios</h5>
            </div>

            <!-- BUTTON ALMACENES -->
            <div class="col-2 ">
                <div class=" col-2 dropdown">
                    <a class="btn btn bg-white border border-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class=""></i>General</a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">General</a></li>
                        <li><a class="dropdown-item" href="#">Emprendedor</a></li>
                        <li><a class="dropdown-item" href="#">Empresa</a></li>
                        <li><a class="dropdown-item" href="#">VIP</a></li>
                    </ul>

                </div>
            </div>

            <!-- BUTTON FILTER -->
            <div class="d-flex justify-content-end col-12 col-md-4 offset-md-4">
                <button type="button" class="btn btn-white border border-secondary px-4 py-2">
                    Filtro <i class="bi bi-funnel"></i>
                </button>
            </div>

        </div>


        <!-- CREACION DE PRODUCTO -->
        <div class="bg-white rounded-4 mt-3 pt-5 position-relative" style="min-height: 500px;">

            <!-- Tabla de productos y servicios -->
            <?= $ProductServices_table ?>
        </div>

        <!-- MODAL FORMULARIO CREAR PRODUCTO -->
        <?= $ProductServices_ModalForm ?>
    </div>
<main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (isset($_GET['msg']) && $_GET['msg'] == 'Servicio creado exitosamente'): ?>
    <script>
        Swal.fire({
            icon: 'success', // Puedes cambiar a 'error', 'info', etc.
            title: '¡Proceso completado!',
            text: '<?= htmlspecialchars($_GET['msg']) ?>',
            showConfirmButton: false,
            timer: 2500
        });
    </script>

<?php elseif (isset($_GET['msg']) && $_GET['msg'] == 'Error al crear el servicio'): ?>
    <script>
        Swal.fire({
            icon: 'error', // Puedes cambiar a 'error', 'info', etc.
            title: '¡Error!',
            text: '<?= htmlspecialchars($_GET['msg']) ?>',
            showConfirmButton: false,
            timer: 2500
        });
    </script>
<?php endif; ?>