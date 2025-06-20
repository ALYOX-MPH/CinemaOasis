<div class="row mt-4 px-3">

   <!-- Nav and tabs component -->
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Todos</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Activos</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Suspendidos</button>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <!-- Table All Employees -->
        <form  method="POST" action="/HumanResources/deleteMultipleEmployees" class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

            <!-- Filters -->
            <div class="mt-2 d-flex ps-0 mb-2">
                <span class="input-group-text" id="basic-addon1">
                    <i class="bi bi-search"></i>
                </span>
                <input class="border  border-1 rounded  " type="text" placeholder="Buscar">

                <button class=" btn btn-light  ms-2">
                    <i class="bi bi-funnel"></i>
                    Filtrar
                </button>

                <!-- Suspender -->
                        <button type="submit" class="btn btn-light border border-1 mx-2">
                            <i class="bi bi-trash3"></i>
                            Suspender
                        </button>
            </div>

            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <!-- Nombre -->
                         <th scope="col"></th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Cédula</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Número</th>
                            <th scope="col">Departamento</th>
                            <th scope="col">Inicio laboral</th>
                            <th scope="col">Condición Médica</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Salario</th>

                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($AllEmployees as $Employee): ?>
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="<?= $Employee['id'] ?>"></td>
                            <td><?php echo $Employee['Name']; ?></td>
                            <td><?php echo $Employee['Persona_Identification_Number']; ?></td>
                            <td><?php echo $Employee['Province']; ?></td>
                            <td><?php echo $Employee['Phone']; ?></td>
                            <td><?php echo $Employee['Id_Departament']; ?></td>
                            <td><?php echo $Employee['Work_Start_Date']; ?></td>
                            <td><?php echo $Employee['Medic_Condition']; ?></td>
                            <td><?php echo $Employee['schedule_Employee']; ?></td>
                            <td><?php echo $Employee['Salary']; ?></td>

                            <!-- Actions -->
                            <td><button type="button" class="btn btn-danger suspend-button" data-id="<?= $Employee['id'] ?>">
                                <i class="bi bi-trash3"></i></button></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
        <!-- Table Active Employees -->
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

            <!-- Filters -->
            <div class="mt-2 d-flex ps-0 mb-2">
                <span class="input-group-text" id="basic-addon1">
                    <i class="bi bi-search"></i>
                </span>
                <input class="border  border-1 rounded  " type="text" placeholder="Buscar">

                <button class=" btn btn-light  ms-2">
                    <i class="bi bi-funnel"></i>
                    Filtrar
                </button>
            </div>

            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <!-- Nombre -->
                         <th scope="col"></th>
                        <th scope="col">Nombre Completo<span class="ms-2">&#8597;</span></th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Numero</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Inicio laboral</th>
                        <th scope="col">Condición Medica</th>
                        <th scope="col">Horario de Trabajo</th>
                        <th scope="col">Salario</th>

                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($AllEmployees as $Employee): ?>
                        <?php if ($Employee['deleted'] == 0): ?>
                            <tr>
                                <td><i class="bi bi-broadcast" style="color: rgb(65, 192, 1); font-size: 20px;"></i></td>
                                <td><?php echo $Employee['Name']; ?></td>

                                <td><?php echo $Employee['Persona_Identification_Number']; ?></td>
                                <td><?php echo $Employee['Province']; ?></td>
                                <td><?php echo $Employee['Phone']; ?></td>
                                <td><?php echo $Employee['Id_Departament']; ?></td>
                                <td><?php echo $Employee['Work_Start_Date']; ?></td>
                                <td><?php echo $Employee['Medic_Condition']; ?></td>
                                <td><?php echo $Employee['schedule_Employee']; ?></td>
                                <td><?php echo $Employee['Salary']; ?></td>

                                
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Table Suspended Employees -->
        <form method="POST" action="/HumanResources/restoreMultipleEmployees" class="tab-pane fade show" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
    
                <!-- Botones -->
                <div class="mt-2 d-flex ps-0 mb-2">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-search"></i>
                    </span>
                    <input class="border border-1 rounded" type="text" placeholder="Buscar">

                    <button type="submit" class="btn btn-light border border-1 mx-2">
                        <i class="bi bi-arrow-counterclockwise"></i>
                        Restaurar seleccionados
                    </button>
                </div>

                <!-- Tabla -->
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Cédula</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Número</th>
                            <th scope="col">Departamento</th>
                            <th scope="col">Inicio laboral</th>
                            <th scope="col">Condición Médica</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Salario</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php foreach ($DeletedEmployees as $Employee): ?>
                <tr>
                    <td><input type="checkbox" name="ids[]" value="<?= $Employee['id'] ?>"></td>
                    <td><?= $Employee['Name']; ?></td>
                    <td><?= $Employee['Persona_Identification_Number']; ?></td>
                    <td><?= $Employee['Province']; ?></td>
                    <td><?= $Employee['Phone']; ?></td>
                    <td><?= $Employee['Id_Departament']; ?></td>
                    <td><?= $Employee['Work_Start_Date']; ?></td>
                    <td><?= $Employee['Medic_Condition']; ?></td>
                    <td><?= $Employee['schedule_Employee']; ?></td>
                    <td><?= $Employee['Salary']; ?></td>
                    <!-- Actions -->
                    <td>
                        <form method="POST" action="/HumanResources/restoreEmployee">
                            <input type="hidden" name="id" value="<?= $Employee['id'] ?>">
                            <button type="submit" class="btn" style="background-color:rgb(65, 192, 1); color: white;">
                                <i class="bi bi-arrow-counterclockwise"></i>
                            </button>
                        </form>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</form>

