<style>
    .avatar {
        width: 30px;
        height: 30px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background-color: #0d6efd;
        /* Bootstrap primary */
        color: white;
        font-weight: bold;
        margin-right: 10px;
    }
</style>

<main class="row container-fluid justify-content-center mx-auto mt-5 pb-5 ">


    <div class="col pt-3 SeccionContainer mt-5">

        <!-- Text and buttons -->
        <div class="row pb-5">

            <!-- Contact and buttos -->
            <div class="d-flex justify-content-between">

                <h3>Contactos</h4>

                    <!-- Buttons and Dropdown -->
                    <div class="col d-flex  align-items-center justify-content-end ">
                        <a href="#">Ayuda</a>

                        <!-- Papelera -->
                        <button class="btn btn-light border border-1 mx-2">
                            <i class="bi bi-trash3"></i>
                            Papelera
                        </button>

                        <!-- Mas acciones (Dropdown)-->
                        <div class="dropdown">
                            <button class="btn btn-light border border-1 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mas acciones
                            </button>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-upload"></i> Importar contactos</a> </li>
                                <li><a class="dropdown-item" href="#"> Exportar Excel</a> </li>
                                <li><a class="dropdown-item" href="#"> Exportar personas asociadas a Excel</a> </li>
                            </ul>
                        </div>

                        <!-- Nuevo contacto (Open modal)-->
                        <?= $new_contact ?>

                    </div>

            </div>

            <div class="row mt-3">
                <p>Crea tus clientes,proveedores y demas contactos para asociarlos en tus documentos</p>
            </div>
        </div>

        <?= $contacts_table ?>
    </div>

</main>
<?php if (isset($_GET['msg'])): ?>
    <script>
        alert("<?= $_GET['msg'] ?>");
    </script>
<?php endif; ?>