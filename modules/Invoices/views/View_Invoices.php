
    <main class="row container-fluid justify-content-center mx-auto mt-5 pb-5 ">

        <!-- RIGHT CONTENT -->

        <div class="col pt-3 SeccionContainer mt-5">

            <!-- Text and buttons -->
            <div class="row pb-5">

                <!-- Contact and buttos -->
                <div class="d-flex justify-content-between">

                    <h3>Facturas</h3>

                    <!-- Buttons and Dropdown -->
                    <div class="col d-flex  align-items-center justify-content-end ">
                        <button class="btn btn-light border border-1">
                            <i class="bi bi-file-earmark-arrow-down"></i> Exportar
                        </button>

                        <!-- Nueva Factura (DropDown)-->
                        <div class="dropdown">
                            <button class="btn text-light bg-blue ms-2 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                + Nueva Factura
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="modules/Invoices/views/View_Create_Invoice.php"><i class="bi bi-pen"></i> Crear manualmente</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-stars"></i> Crear desde un archivo o imagen</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

                <div class="row mt-3">
                    <p>Si necesitas ayuda para crear facturas haz <span class="text-success">click aqui</span></p>
                </div>
            </div>

            <!-- Tables -->
            <div class="row mt-0 px-3">

                <!--Table -->
                <div class="container-xl border border-2 rounded mt-0  border-top border-bottom" style="background-color: #FFF;">

                    <!-- Search Bar -->
                    <div class="mt-2 d-flex ps-0">

                        <!-- Search And Filters Buttons -->
                        <div class="btn-group mb-2" role="group" aria-label="Basic example">

                            <!-- Search icon -->
                            <button type="button" class="btn btn-light"><i class="bi bi-search"></i></button>

                            <!-- Input Search -->
                            <input class="border  border-1 rounded  " type="text" placeholder="Buscar">

                            <!-- Filter Button -->
                            <button class=" btn btn-light  ms-2">
                                <i class="bi bi-funnel"></i>
                                Filtrar
                            </button>
                        </div>

                    </div>

                    <table class="table align-middle table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col"><input type="checkbox"></th>
                                <th scope="col"># Interno</th>
                                <th scope="col">NCF/Número</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Creación</th>
                                <th scope="col">Vencimiento</th>
                                <th scope="col">Total</th>
                                <th scope="col">Por cobrar</th>
                                <th scope="col">Estado</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>---</td>
                                <td></td>
                                <td>Ana Elizabeth Jimenez</td>
                                <td>14/05/2025</td>
                                <td>14/05/2025</td>
                                <td>$ 25.00</td>
                                <td>-</td>
                                <td><span class="badge badge-draft">Borrador</span></td>
                                <td></td>
                                <td><i class="bi bi-three-dots-vertical"></i></td>
                            </tr>

                            <tr>
                                <td><input type="checkbox"></td>
                                <td>---</td>
                                <td></td>
                                <td>Ina Santos</td>
                                <td>13/05/2025</td>
                                <td>13/05/2025</td>
                                <td>$ 12.00</td>
                                <td>-</td>
                                <td><span class="badge badge-draft">Borrador</span></td>
                                <td></td>
                                <td><i class="bi bi-three-dots-vertical"></i></td>
                            </tr>

                            <tr>
                                <td><input type="checkbox"></td>
                                <td>---</td>
                                <td>1125</td>
                                <td>CTS COLD TRUCK</td>
                                <td>12/05/2025</td>
                                <td>20/05/2025</td>
                                <td>$ 50.00</td>
                                <td>$ 50.00</td>
                                <td><span class="badge bg-warning text-dark">Por cobrar</span></td>
                                <td><i class="bi bi-database"></i></td>
                                <td><i class="bi bi-three-dots-vertical"></i></td>
                            </tr>

                            <tr>
                                <td><input type="checkbox"></td>
                                <td>---</td>
                                <td>1124</td>
                                <td>Daymelis Secret's</td>
                                <td>11/05/2025</td>
                                <td>19/05/2025</td>
                                <td>RD$ 2,500.00</td>
                                <td>RD$ 2,500.00</td>
                                <td><span class="badge bg-warning text-dark">Por cobrar</span></td>
                                <td><i class="bi bi-database"></i></td>
                                <td><i class="bi bi-three-dots-vertical"></i></td>
                            </tr>

                            <tr>
                                <td><input type="checkbox"></td>
                                <td> ---</td>
                                <td>1054</td>
                                <td>Leidy Laura MAKEUP</td>
                                <td>10/05/2025</td>
                                <td>19/05/2025</td>
                                <td>RD$ 2,500.00</td>
                                <td>RD$ 2,500.00</td>
                                <td><span class="badge bg-warning text-dark">Por cobrar</span></td>
                                <td><i class="bi bi-database"></i></td>
                                <td><i class="bi bi-three-dots-vertical"></i></td>
                            </tr>

                            <tr>
                                <td><input type="checkbox"></td>
                                <td>---</td>
                                <td>B0100000066</td>
                                <td>BEJUCO TIRES SRL</td>
                                <td>09/05/2025</td>
                                <td>09/05/2025</td>
                                <td>RD$ 11,000.00</td>
                                <td>RD$ 0.00</td>
                                <td><span class="badge bg-success text-white">Cobrada</span></td>
                                <td></td>
                                <td><i class="bi bi-three-dots-vertical"></i></td>
                            </tr>

                            <tr>
                                <td><input type="checkbox"></td>
                                <td>---</td>
                                <td>1123</td>
                                <td>Bona Tours</td>
                                <td>08/05/2025</td>
                                <td>16/05/2025</td>
                                <td>RD$ 6,000.00</td>
                                <td>RD$ 6,000.00</td>
                                <td><span class="badge bg-warning text-dark">Por cobrar</span></td>
                                <td><i class="bi bi-database"></i></td>
                                <td><i class="bi bi-three-dots-vertical"></i></td>
                            </tr>

                            <tr>
                                <td><input type="checkbox"></td>
                                <td>---</td>
                                <td>1122</td>
                                <td>Cuerpo Perfecto Aesthetic</td>
                                <td>07/05/2025</td>
                                <td>15/05/2025</td>
                                <td>$ 160.00</td>
                                <td>$ 160.00</td>
                                <td><span class="badge bg-warning text-dark">Por cobrar</span></td>
                                <td><i class="bi bi-database"></i></td>
                                <td><i class="bi bi-three-dots-vertical"></i></td>
                            </tr>

                            <tr>
                                <td><input type="checkbox"></td>
                                <td>---</td>
                                <td>1121</td>
                                <td>CONSTRUCTORA E</td>
                                <td>07/05/2025</td>
                                <td>15/05/2025</td>
                                <td>$ 55.00</td>
                                <td>$ 55.00</td>
                                <td><span class="badge bg-warning text-dark">Por cobrar</span></td>
                                <td><i class="bi bi-database"></i></td>
                                <td><i class="bi bi-three-dots-vertical"></i></td>
                            </tr>

                            <tr>
                                <td><input type="checkbox"></td>
                                <td>---</td>
                                <td>1120</td>
                                <td>SUPPLINET DENTAL</td>
                                <td>05/05/2025</td>
                                <td><span class="text-danger-date">13/05/2025</span></td>
                                <td>$ 110.00</td>
                                <td>$ 110.00</td>
                                <td><span class="badge bg-warning text-dark">Por cobrar</span></td>
                                <td><i class="bi bi-database"></i></td>
                                <td><i class="bi bi-three-dots-vertical"></i></td>
                            </tr>

                            <!-- Paginacion -->

                            <!-- <tr>
                                <span>Page1</span>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </tr> -->
                            <!-- <tr>
                                <td>
                                    <span>Page1</span>
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </td>


                            </tr> -->

                        </tbody>


                    </table>

                    <div class="d-flex justify-content-end">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

        </div>

    </main>

