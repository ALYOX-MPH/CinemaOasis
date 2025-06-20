<main class="row container-fluid justify-content-center mx-auto mt-5 pb-5 ">



    <div class="col pt-3 SeccionContainer mt-5">


        <!-- Text and buttons -->
        <div class="row pb-5">

            <!-- Contact and buttos -->
            <div class="d-flex justify-content-between">

                <h3>Empleados</h4>

                    <!-- Buttons and Dropdown -->
                    <div class="col d-flex ms-auto  align-items-center justify-content-end ">
                        <a class="p-2 text-success" href="#">Ayuda</a>

                        

                        <!-- Mas acciones (Dropdown)-->
                        <div class="dropdown">
                            <button class="btn btn-light border border-1 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mas acciones
                            </button>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-upload"></i> Importar Empleados</a> </li>
                                <li><a class="dropdown-item" href="#"> Exportar Excel</a> </li>
                                <li><a class="dropdown-item" href="#"> Exportar Empleados asociadas a Excel</a> </li>
                            </ul>
                        </div>

                        <!-- Nuevo contacto (Open modal)-->
                        <button type="button" class=" mx-2 btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            + Nuevo Empleado
                        </button>

                    </div>

            </div>

            <div class="row mt-3">
                <p>Crea tus Empleados para asociarlos en tus documentos</p>
            </div>
        </div>

        <!-- Tables -->
        <div class="row mt-4 px-3">

            <div class="container-xl border border-2 rounded mt-0  border-top border-bottom" style="background-color: #FFF;">
                <div class="row mt-2 pt-3 d-flex justify-content-center">

                    <div class="col-4 text-center border-end">
                        <h3><i class="bi bi-people-fill pe-2"></i>Total</h3>
                        <p class="text-success fs-4"><?php
                         $cantidad = count($AllEmployees)+count($DeletedEmployees);?>
                            <?php echo $cantidad; ?></p>
                        <p class="pt--5">Empleados</p>
                    </div>


                    <div class="col-4 text-center border-end">
                        <h3><i class="bi bi-person-fill-check pe-2"></i>Activos</h3>
                        <p class="text-success fs-4"><?php
                         $cantidad = count($AllEmployees);?>
                            <?php echo $cantidad; ?></p></p>
                        <p class="pt--5">Empleados</p>
                    </div>

                    <div class="col-4 text-center">
                        <h3><i class="bi bi-person-fill-slash pe-2"></i>Suspendidos</h3>
                        <p class="text-danger fs-4"> <?php
                         $cantidad = count($DeletedEmployees);?>
                            <?php echo $cantidad; ?></p>
                        <p class="pt--5">Empleados</p>
                    </div>

                </div>
            </div>

            <!-- Tables -->
            <?= $Employee_Table ?>

            
        </div>

        <!-- Modal -->
        <?= $Employee_Modal?>

        <!-- Form to delete employee -->
 <form id="suspendForm" method="POST" action="/HumanResources/deleteEmployee" style="display: none;">
    <input type="hidden" name="id" id="employeeIdToSuspend">
</form>       
</main>


<script src="themes\Uno\assets\js\Sweetalert2.js"></script>
<?php if (isset($_GET['msg'])): ?>
    <script>
        Swal.fire({
            icon: 'success', // Puedes cambiar a 'error', 'info', etc.
            title: '¡Proceso completado!',
            text: '<?= htmlspecialchars($_GET['msg']) ?>',
            showConfirmButton: false,
            timer: 2500
        });
    </script>
<?php endif; ?>

<!-- Suspend employee -->
<script>
document.querySelectorAll('.suspend-button').forEach(button => {
    button.addEventListener('click', function () {
        const employeeId = this.dataset.id;

        Swal.fire({
            title: '¿Estás seguro?',
            text: "Este empleado será suspendido.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, suspender'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('employeeIdToSuspend').value = employeeId;
                document.getElementById('suspendForm').submit();
            }
        });
    });
});
</script>