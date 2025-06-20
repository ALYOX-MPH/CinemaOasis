
<!-- Modal -->
<div class="container-lg">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <Form class="modal-content" method="POST" action="/HumanResources/SetEmployee">
                <input type="hidden" name="Type" value="empleado">

                <!-- Form Title -->
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Nuevo Empleado</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="row g-3">
                        <!-- NAME INPUT -->
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre completo" name="Name">
                        </div>

                        <!-- NUMBER INPUT -->
                        <div class="col-md-6">
                            <input type="tel" class="form-control" id="inputTel4" placeholder="Numero Telefonico" name="Phone">
                        </div>

                        <!-- Tipo de identificacion -->
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Cedula o Pasaporte</label>
                            <input type="text" class="form-control" name="Persona_Identification_Number">
                        </div>

                        <!-- TIPO DE DEPARTAMENTO -->

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Tipo de Departamento</label>
                            <select id="inputState" class="form-select" name="Id_Departament">
                                <option selected value="1">Contavilidad</option>
                                <option value="2">Ventas</option>
                                <option value="3">Almacen</option>
                                <option value="4">Recursos Humanos</option>
                                <option value="5">Marketing</option>
                                <option value="6">Servicio al Cliente</option>
                            </select>
                        </div>

                        <!--DATE INPUT  -->
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Fecha de Inicio laboral</label>
                            <input type="date" class="form-control" name="Work_Start_Date">
                        </div>

                        <!--MEDIC CONDICTION -->
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Condición Medica</label>
                            <input type="text" class="form-control" name="Medic_Condition">
                        </div>

                        <!-- Municipio/provincia input 3 -->
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Municipio o provincia</label>
                            <input type="text" class="form-control" name="Province">
                        </div>

                        <!-- BORW DAY -->
                        <div class="col-md-6">
                            <label for="inputDate4" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="inputDate4" name="Birth_Date">
                        </div>

                        <!-- HORARIO DE EMPLEADO-->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Horario de empleado</label>
                            <select id="inputState" class="form-select" name="schedule_Employee">
                                <option selected>Completo</option>
                                <option>Vespertino</option>
                                <option>Matutino</option>
                                <option>Nocturno</option>
                            </select>
                        </div>

                        <!-- SALARIO -->
                        <div class="col-md-6">
                            <label for="inputSalario4" class="form-label " min="0" step="0.01">Salario</label>
                            <input type="decimal" class="form-control" id="inputSalario4" name="Salary">
                        </div>
                    </div>
                </div>

                <!-- Footer Buttons -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light border border-1 rounded" data-bs-dismiss="modal"><a href="modules/HumanResources/views/View_AdvanceFormEmployees.php">Ir a formulario avanzado</a></button>
                    <button type="submit" class="btn btn-success">Crear Empleado</button>
                </div>
            </form>
        </div>
    </div>
</div>