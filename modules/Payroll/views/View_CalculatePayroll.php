<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./assets/bootstrap.min"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>

</head>



    <body class="container-fluid" style="background-color: #f5f5fb;">


        <!-- Cabezera Principal -->
        <header class=" row">

            <nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed " style="z-index: 1046" id="Nav">

                <div class="container-fluid px-0 justify-content-between ">

                    <!-- LOGO -->
                    <div class="Logo_And_Menu ">

                        <button class=" p-2 me-0 btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <i style="font-size: 30px;" class="bi bi-list"></i>
                        </button>

                        <a class="navbar-brand " href="#">
                            <!-- <img src="modules/Home/views/assets/icons/Alegra.svg" alt=""> -->
                        </a>

                    </div>



                    <!-- SEARCH BAR -->
                    <form class="d-flex  mt-0" role="search" id="NavSearch">
                        <!-- <button type="button" class="btn border ">+</button> -->
                        <input style="max-width: 280px;" class=" py-1 px-1 form-control mx-0" id="SearchBar" type="search" placeholder="Buscar..." aria-label="Search">
                        <img src="modules/Home/views/assets/icons/Search.svg" id="SEARCHICON" alt="">
                    </form>

                    <!-- BUTTON TOGGLE -->
                    <button class="p-0 navbar-toggler border-0 me-4 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="max-width: 20px;">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- LINKS -->
                    <div class="collapse navbar-collapse flex-grow-0 " id="navbarSupportedContent">

                        <ul class="navbar-nav  mb-2 mb-lg-0 align-items-center" id="NavLinks">

                            <!-- ? -->
                            <li class="nav-item">
                                <a class="nav-link my-2my-2active border rounded px-3 py-2" aria-current="page" href="#">
                                    ?
                                </a>
                            </li>

                            <!-- Leaf icon -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img style="width: 25px;" src="modules/Home/views/assets/icons/leaf.svg" alt="">
                                </a>
                            </li>


                            <!-- MENU  ICON -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i style="font-size: 20px;" class="bi bi-grid-3x3-gap-fill"></i>
                                </a>
                            </li>

                            <!-- Email icon -->
                            <li class="nav-item">
                                <i style="font-size: 20px;" class="bi bi-envelope"></i>
                            </li>

                            <!-- User icon -->
                            <li class="nav-item">
                                <img style="width: 100px;" class="mx-2" width="80px" src="modules/Home/views/assets/icons/Logo-Dreamed-Services.png" alt="">
                            </li>

                        </ul>
                    </div>

                </div>
            </nav>


        </header>

        <!-- Menu Principal -->
        <main class="row container-fluid justify-content-center mx-auto mt-5 ">


            <!-- SIDEBAR -->
            <div style="max-width: 45%;" class="offcanvas offcanvas-start " data-bs-scroll="false" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" data-bs-backdrop="static">

                <div class="offcanvas-header">
                </div>

                <div class="offcanvas-body mt-3">
                <nav class=" offcanvas-body d-flex flex-column gx-3">


                    <!-- Inicio -->
                    <a class="nav-link my-2" href="/Home"><i class="bi bi-house-door-fill"></i> Inicio</a>

                    <!-- Factura electronica -->
                    <a class="nav-link my-2" href="#"><i class="bi bi-receipt"></i> Factura electrónica</a>


                    <!-- Ingresos -->
                    <div class="accordion" id="accordionExample">
                    <div class="accordion-item border border-0">

                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="bi bi-graph-up me-2"></i>Ingresos
                        </button>
                        </h2>

                        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                        <div class="accordion-body px-0">
                            <a class="dropdown-item my-2" href="/Invoices">Facturas de venta</a>
                            <a class="dropdown-item my-2" href="#">Factura de venta recurrentes</a>
                            <a class="dropdown-item my-2" href="#">Pagos recibidos</a>
                            <a class="dropdown-item my-2" href="#">Notas de credito</a>
                            <a class="dropdown-item my-2" href="#">Cotizaciones</a>
                            <a class="dropdown-item my-2" href="#">Conduces</a>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Compras -->
                    <a class="nav-link my-2" href="#"><i class="bi bi-cart-check"></i> Compras</a>

                    <!-- Contactos -->
                    <a class="nav-link my-2 my-2" href="/Contacts"><i class="bi bi-people-fill"></i> Contactos</a>

                    <!-- Inventario -->
                    <div class="accordion" id="accordionExample">
                    <div class="accordion-item border border-0">

                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInventary" aria-expanded="true" aria-controls="collapseOne">
                            <i class="bi bi-box-seam me-2"></i> Inventario
                        </button>
                        </h2>

                        <div id="collapseInventary" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                        <div class="accordion-body px-0">
                            <a class="dropdown-item my-2" href="/ProductServices">Productos y servicios</a>
                            <a class="dropdown-item my-2" href="#">Valor de inventario</a>
                            <a class="dropdown-item my-2" href="#">Ajustes de inventario</a>
                            <a class="dropdown-item my-2" href="#">Gestion de productos</a>
                            <a class="dropdown-item my-2" href="#">Lista de precios</a>
                            <a class="dropdown-item my-2" href="#">Almacenes</a>
                            <a class="dropdown-item my-2" href="#">Categorias</a>
                            <a class="dropdown-item my-2" href="#">Atributos</a>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Bancos -->
                    <a class="nav-link my-2" href="#"><i class="bi bi-bank"></i> Bancos</a>

                    <!-- Contabilidad -->
                    <a class="nav-link my-2" href="#"><i class="bi bi-journal-check"></i> Contabilidad</a>

                    <!-- Reportes -->
                    <a class="nav-link my-2" href="#"><i class="bi bi-clipboard-data"></i> Reportes</a>

                    <!-- Configuracion -->
                    <a class="nav-link my-2" href="#"><i class="bi bi-gear-fill"></i> Configuración</a>
                    <hr>

                    <small class="text-muted ms-2">Descubre más soluciones</small>


                    <!-- Recursos humanos -->
                    <div class="accordion mt-2" id="accordionExample">
                    <div class="accordion-item border border-0">

                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHumanResources" aria-expanded="true" aria-controls="collapseOne">
                            <i class="bi bi-person-vcard me-2"></i> Recursos Humanos
                        </button>
                        </h2>

                        <div id="collapseHumanResources" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                        <div class="accordion-body px-0">
                            <a class="dropdown-item my-2" href="#">Inicio</a>
                            <a class="dropdown-item my-2" href="/HumanResources">Empleados</a>
                            <a class="dropdown-item my-2" href="/Payroll">Nominas</a>
                            <a class="dropdown-item my-2" href="#">Liquidaciones</a>
                            <a class="dropdown-item my-2" href="#">Gestion de tiempo y horario</a>
                            <a class="dropdown-item my-2" href="#">Gestion de desempeño</a>
                            <a class="dropdown-item my-2" href="#">Autoservicio de Empleado</a>
                            <a class="dropdown-item my-2" href="#">Reportes y Analitica</a>
                            <a class="dropdown-item my-2" href="#">Cumplimiento Normativo</a>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Pos -->
                    <a class="nav-link my-2" href="#"><i class="bi bi-upc-scan"></i> POS</a>

                    <!-- Portal de clientes -->
                    <a class="nav-link my-2" href="#"><i class="bi bi-person-lines-fill"></i> Portal de clientes</a>

                </nav>
                </div>
            </div>


            <!-- CONTENEDOR PRINCIPAL -->

            <div class="col pt-3 SeccionContainer mt-5">

                <!-- Text and buttons -->
                <div class="row pb-5">

                    <!-- Text and buttons -->
                    <div class="d-flex justify-content-between">

                        <h3 class="col-3">Periodo de nomina </h3>
                        <h3 class="col-3 text-left text-success">01-15 Enero 2025</h3>
                        <!-- Buttons and Dropdown -->
                        <div class="col d-flex  align-items-center justify-content-end ">
                            <a class="pe-3" href="#"><i class="bi bi-info-circle pe-2"></i>Ayuda</a>

                            <!-- Calculate payroll (Open modal)-->
                            <button type="button" class=" mx-2 btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-currency-dollar"></i> Calcular Nomina
                            </button>

                        </div>

                    </div>

                    <!-- Descripción -->
                    <div class="row mt-3">
                        <p>Calcula el pago de nómina de tus empleados para el periodo seleccionado.</p>
                    </div>
                </div>



                <!-- Barra de Progreso e Información -->
                <div class="row gx-5 ">
                    <!-- Columna de Barra de Progreso -->
                    <div class="col  bg-light mx-2 d-flex flex-column justify-content-between">
                        <p class="fs-4 text-secondary">Barra de Progreso</p>
                        <div class="row">
                            <p class="col-6">0%</p>
                            <p class="col-6 d-flex align-items-center justify-content-end">100%</p>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" style="width: 60%;"></div>
                        </div>
                        <p class="fs-6 text-secondary">Se ha calculado 0 de 2 empleados</p>
                    </div>

                    <!-- Columna de Información -->
                    <div class="col bg-light mx-2 mb-4 d-flex flex-column justify-content-between">
                        <p class="fs-4 text-secondary">Información</p>
                        <div class="row">
                            <!-- Periodo -->
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center">
                                    <h3 class="me-3">Periodo</h3>
                                    <p class="bg-secondary text-white px-2 rounded">Sin periodo</p>
                                </div>
                                <i class="pe-5 fs-2 bi bi-calendar"></i>
                            </div>

                            <!-- Estado -->
                            <div class="d-flex align-items-center">
                                <h3 class="me-3">Estado</h3>
                                <p class="text-secondary d-flex align-items-center">
                                    <i class="pe-2 bi bi-three-dots"></i>Por calcular
                                </p>
                            </div>
                        </div>

                    </div>


                    <!-- Barra de saldos e ingresos -->
                    <div class="row gx-5 pt-3 ">
                        <div class="col  bg-light mx-2 d-flex flex-column justify-content-center bg-primary ">

                            <div class="row mt-2  d-flex pb-2">

                                <div class="col-3 border-end border-1 ">
                                    <span class="text-secondary">Salario</span>
                                    <span class="fs-5 text-center">RD$26,500</span>
                                </div>

                                <div class="col-3 border-end border-1 ">
                                    <span class="text-secondary">Igresos</span>
                                    <span class="fs-5 text-center">RD$00.0</span>
                                </div>

                                <div class="col-3 border-end border-1 ">
                                    <span class="text-secondary">Deducciones</span>
                                    <span class="fs-5 text-center">RD$10,500</span>
                                </div>

                                <div class="col-3 border-end border-1 ">
                                    <span class="text-secondary">Empleados</span>
                                    <br>
                                    <span class="fs-5 text-center">2</span>
                                </div>
                            </div>
                        </div>

                        <!-- Barra de Totales -->
                        <div class="col  bg-light mx-2 d-flex flex-column justify-content-center bg-primary ">
                            <div class="row mt-2  d-flex pb-2">

                                <div class="col-6 border-end border-1 ">
                                    <i class="fs-1 bi bi-coin"></i>
                                    <span class="text-secondary">Total Costo</span>
                                    <br>
                                    <span class="fs-5 text-center">RD$26,500</span>
                                </div>

                                <div class="col-6 border-end border-1 ">
                                    <i class="fs-1 bi bi-cash"></i>
                                    <span class="text-secondary">Total Pago</span>
                                    <br>
                                    <span class="fs-5 text-center">RD$30,900</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Tables -->
            <div class="row mt-4 px-3">



                <div class="tab-content" id="nav-tabContent">
                    <!-- Table All -->
                    <div class="bg-light pt-5 rounded-4 tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">


                        <!-- Tabla de empleados -->
                        <table class="table table-bordered align-middle">
                            <thead class="table-light">
                                <tr>

                                    <th scope="col ">
                                        <h5 class="text-secondary"> Nombre</h5>
                                    </th>
                                    <th scope="col">
                                        <h5 class="text-secondary">Identificación</h5>
                                    </th>
                                    <th scope="col">
                                        <h5 class="text-secondary">Salario</h5>
                                    </th>
                                    <th scope="col">
                                        <h5 class="text-secondary">Igresos adicionales</h5>
                                    </th>
                                    <th scope="col">
                                        <h5 class="text-secondary">deducciones</h5>
                                    </th>
                                    <th scope="col">
                                        <h5 class="text-secondary">Total a pagar</h5>
                                    </th>
                                    <th scope="col">
                                        <h5 class="text-secondary">Accionees</h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="avatar">A</span> A local Pest Control
                                    </td>
                                    <td>4029215152</td>
                                    <td>RD$20,000</td>
                                    <td>RD$500</td>
                                    <td>RD$0.00</td>
                                    <td>RD$12,000</td>
                                    <td>
                                        <i class="bi bi-calculator m-2"></i>
                                        <i class="bi bi-pencil me-2"></i>
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="avatar">A</span> A&A Organic
                                    </td>
                                    <td>4029215152</td>
                                    <td>RD$20,000</td>
                                    <td>RD$500</td>
                                    <td>RD$0.00</td>
                                    <td>RD$12,000</td>
                                    <td>
                                        <i class="bi bi-calculator m-2"></i>
                                        <i class="bi bi-pencil me-2"></i>
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="avatar">A</span> Adi Robles
                                    </td>
                                    <td>4029215152</td>
                                    <td>RD$20,000</td>
                                    <td>RD$500</td>
                                    <td>RD$0.00</td>
                                    <td>RD$12,000</td>
                                    <td>
                                        <i class="bi bi-calculator m-2"></i>
                                        <i class="bi bi-pencil me-2"></i>
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="avatar">A</span> Alberto Batista
                                    </td>
                                    <td>4029215152</td>
                                    <td>RD$20,000</td>
                                    <td>RD$500</td>
                                    <td>RD$0.00</td>
                                    <td>RD$12,000</td>
                                    <td>
                                        <i class="bi bi-calculator m-2"></i>
                                        <i class="bi bi-pencil me-2"></i>
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="avatar">A</span> Alegra
                                    </td>
                                    <td>4029215152</td>
                                    <td>RD$20,000</td>
                                    <td>RD$500</td>
                                    <td>RD$0.00</td>
                                    <td>RD$12,000</td>
                                    <td>
                                        <i class="bi bi-calculator m-2"></i>
                                        <i class="bi bi-pencil me-2"></i>
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>


            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Calculo automatico de nómina</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-2 ">
                            <p>Confirma tu Información para hacer el calculo automatico</p>
                            <div class="row pt-3">
                                <div class="col-2">
                                    <h5 class="">Periodo</h5>
                                </div>
                                <div class="col-3 d-flex align-items-center justify-content-start">
                                    <p class="text-secondary px-2 rounded  ">Sin periodo</p>
                                </div>
                                <div class="col-7 d-flex align-items-center justify-content-end">
                                    <i class="pe-5 fs-2 bi bi-calendar"></i>
                                </div>

                                <div class="col-3">
                                    <h5 class="">Empleados</h5>
                                </div>
                                <div class="col-2">
                                    <p class=" text-secondary px-2 rounded">2</p>
                                </div>
                                <div class="col-6"></div>

                                <div class="col-6 border-end border-1 ">
                                    <i class="fs-1 bi bi-coin"></i>
                                    <span class="text-secondary ">Total Costo</span>
                                    <br>
                                    <span class="fs-5 text-center">RD$26,500</span>
                                </div>

                                <div class="col-6 border-end border-1 ">
                                    <i class="fs-1 bi bi-cash"></i>
                                    <span class="text-secondary">Total Pago</span>
                                    <br>
                                    <span class="fs-5 text-center">RD$30,900</span>
                                </div>

                                <div class="d-flex justify-content-center pt-5">
                                    <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success mx-2">Calcular</button>
                                </div>
                            </div>

                        </div>


    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</html>