<!-- Tables -->
<div class="row mt-4 px-3">

    <!-- Nav and tabs component -->
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Todos</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Clientes</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Proveedores</button>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <!-- Table All Contacts -->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

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
                        <th scope="col">
                            <input type="checkbox">
                            Nombre<span class="ms-2">&#8597;</span>
                        </th>



                        <th scope="col">Apellido</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Dirrección</th>
                        <th scope="col">Email</th>

                        <th scope="col">Acciones</th>


                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($AllContacts as $Contact): ?>

                        <tr>
                            <td>
                                <input type="checkbox" class="me-2">
                                <span class="avatar"> <?= strtoupper($Contact['Name'][0]) ?> </span> <?= $Contact['Name'] ?>
                            </td>

                            <td><?= $Contact['NickName'] ?></td>
                            <td> <?= $Contact['Phone'] ?></td>
                            <td><?= $Contact['Type'] ?></td>
                            <td><?= $Contact['Address'] ?></td>
                            <td><?= $Contact['Email'] ?></td>
                            <td>
                                <i class="bi bi-pencil me-2"></i>
                                <i class="bi bi-three-dots-vertical"></i>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Table Clients -->
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
                        <th scope="col">
                            <input type="checkbox">
                            Nombre<span class="ms-2">&#8597;</span>
                        </th>



                        <th scope="col">Apellido</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Dirrección</th>
                        <th scope="col">Email</th>

                        <th scope="col">Acciones</th>


                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($OnlyClients ?? [] as $Contact): ?>

                        <tr>
                            <td>
                                <input type="checkbox" class="me-2">
                                <span class="avatar"> <?= strtoupper($Contact['Name'][0]) ?> </span> <?= $Contact['Name'] ?>
                            </td>

                            <td><?= $Contact['NickName'] ?></td>
                            <td> <?= $Contact['Phone'] ?></td>
                            <td><?= $Contact['Type'] ?></td>
                            <td><?= $Contact['Address'] ?></td>
                            <td><?= $Contact['Email'] ?></td>
                            <td>
                                <i class="bi bi-pencil me-2"></i>
                                <i class="bi bi-three-dots-vertical"></i>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Table Proveedores -->
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">

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
                        <th scope="col">
                            <input type="checkbox">
                            Nombre<span class="ms-2">&#8597;</span>
                        </th>



                        <th scope="col">Apellido</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Dirrección</th>
                        <th scope="col">Email</th>

                        <th scope="col">Acciones</th>


                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($OnlySuppliers ?? [] as $Contact): ?>

                        <tr>
                            <td>
                                <input type="checkbox" class="me-2">
                                <span class="avatar"> <?= strtoupper($Contact['Name'][0]) ?> </span> <?= $Contact['Name'] ?>
                            </td>

                            <td><?= $Contact['NickName'] ?></td>
                            <td> <?= $Contact['Phone'] ?></td>
                            <td><?= $Contact['Type'] ?></td>
                            <td><?= $Contact['Address'] ?></td>
                            <td><?= $Contact['Email'] ?></td>
                            <td>
                                <i class="bi bi-pencil me-2"></i>
                                <i class="bi bi-three-dots-vertical"></i>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>