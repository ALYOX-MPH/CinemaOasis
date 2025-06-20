<main class="row container-fluid justify-content-center mx-auto  mt-5 ">
       <!-- CONTENEDOR  -->
    <div class="container col-11 mt-5">
        <!-- HEADER FUNCTION -->
        <div class="row">
            <div class="col-7">
                <h3 class="">Calcular nómina</h3>
                <p>Calcula los devengados y deducciones de tu equipo de trabajo.</p>
            </div>

                <!-- BUTTON ADD PRODUCT -->
                <div class="col-5">
                    <button type="button" class="col-md-8    btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="bi bi-plus"></i>
                        Nuevo periodo de nomina 
                    </button>
                </div>
                </div> 

        </div>


    <!-- CREACION DE PRODUCTO -->
     <div class="bg-white rounded-4 mt-3 pt-5 position-relative" style="min-height: 500px;">
        

                <!-- MENSAJE CREA TU PRODUCTO -->
                 <div class="d-flex flex-column align-items-center justify-content-center" style="height: 300px;">
                    <i class="bi bi-cash-coin" style="font-size: 2em;"></i>
                    <h3 class="mt-3 text-center">¡Calcula la Nomina de tus empleados!</h3>
                    <p>Calcula los devengados y deducciones de tu equipo de trabajo.</p>
                    <button type="button" class="btn btn-secondary btn-lg mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="bi bi-plus"></i>Nuevo periodo de nomina </button>
                </div>

            <!-- NEXT PAGE -->
             <div class="container-fluid border-top position-absolute bottom-0 start-0 end-0 p-2 ">
                <nav aria-label="Page navigation example ">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item "><a class="page-link text-secondary" href="">1</a></li>
                    <li class="page-item"><a class="page-link text-secondary" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-secondary" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link text-secondary" href="#">Next</a></li>
                   </ul></nav>
                  </div>
     </div>

      <!-- MODAL FORMULARIO CREAR PRODUCTO -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">

                    <!-- Form Title -->
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nuevo Periodo de Nomina</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                       <p class="col-12">Calcula los devengados y deducciones de tu equipo de trabajo.</p>
                
                    <div class="modal-body">
                        <div class="col-12">
                            <label for="inputState" class="form-label">Periodo</label>
                            <select id="inputState" class="form-select">
                                <option selected></option>
                                <option>01/01/2025 - 15/01/2025</option>
                                <option>16/01/2025 - 31/01/2025</option>
                                <option>01/02/2025 -15/02/2025</option>
                                <option> 16/02/2025 - 28/02/2025</option>
                            </select>
                        </div>
                    </div>

                    <!-- Footer Buttons -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light border border-1 rounded" data-bs-dismiss="modal">Cancelar</a></button>
                        <button type="submit" class="btn btn-secondary"><a href="modules\Payroll\views\View_CalculatePayroll.php"> Crear Periodo</a></button>
                    </div>
                </div>
            </div>
        </div>

                
</div>

</main>