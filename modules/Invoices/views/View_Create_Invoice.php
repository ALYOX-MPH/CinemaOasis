<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="../../../themes/Uno/assets/css/main.css">

    <title>Crear Factura</title>
</head>


<style>
    :root {
        --primary_Color: #6ddbd0;
        --background_Color: #f0f2f9;
        --Secundary_background_color: #FFF;
        --Green_Color: #46c89b;
        --Red_Color: #ce5956
    }

    .badge-draft {
        background-color: #e0e7ff;
        color: #3730a3;
    }

    .badge-pending {
        background-color: #fef3c7;
        color: #92400e;
    }

    .badge-paid {
        background-color: #d1fae5;
        color: #065f46;
    }

    .text-danger-date {
        color: red;
    }

    .table td,
    .table th {
        vertical-align: middle;
    }




    a {
        text-decoration: none !important;
        color: #000 !important;
    }



    #SEARCHICON {
        position: relative;
        left: -45px;
    }
</style>

<body class="container-fluid" style="background-color: #f5f5fb;">



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
                                <img style="width: 25px;" src="./assets/icons/leaf.svg" alt="">
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
                            <img style="width: 100px;" class="mx-2" width="80px" src="./assets/icons//Logo-Dreamed-Services.png" alt="">
                        </li>

                    </ul>
                </div>

            </div>
        </nav>


    </header>

    <main class="row container-fluid justify-content-center mx-auto mt-5 pb-5 ">


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




        <!-- RIGHT CONTENT -->

        <div class="container-fluid mt-5">

            <!-- Seccion1 "Nueva Factura" -->
            <div>
                <!-- Tittle and buttons -->
                <div class="d-flex justify-content-between">
                    <h3>Nueva Factura</h3>

                    <!-- Buttons -->
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <!-- Starts Button   -->
                        <button type="button" class="btn  border border-1 rounded" style="background-color: #FFF;"><i class="bi bi-stars text-success"></i></button>

                        <button type="button" class="btn border border-1 rounded ms-2"><i class="bi bi-sliders"></i> Personalizar opciones</button>
                    </div>
                </div>

                <!-- Dropdows for settings the Invoice -->
                <div class="mt-3 border border-1 p-4 rounded d-flex">
                    <!-- Moneda -->
                    <div class="mx-4">
                        <label for="Moneda" class="mb-1">Moneda</label>
                        <select class="form-select" aria-label="Moneda">
                            <option selected>DOP-Dominicano</option>
                            <option value="1">US-Dollar</option>
                            <option value="2">EUR-Euro</option>
                        </select>
                    </div>

                    <!-- Almacen -->
                    <div class="mx-4">
                        <label for="Almacen" class="mb-1">Almacen</label>
                        <select class="form-select" aria-label="Almacen">
                            <option selected>Principal</option>
                            <option value="1">Empty</option>
                            <option value="2">Empty</option>
                        </select>
                    </div>

                    <!-- Lista de precios -->
                    <div class="mx-4">
                        <label for="ListaDePrecios" class="mb-1">Lista de precios</label>
                        <select class="form-select" aria-label="ListaDePrecios">
                            <option selected>General</option>
                            <option value="1">Empty</option>
                            <option value="2">Empty</option>
                        </select>
                    </div>

                    <!-- Vendedor -->
                    <div class="mx-4">
                        <label for="Vendedor" class="mb-1">Vendedor</label>
                        <select class="form-select" aria-label="ListaDePrecios">
                            <option selected>Buscar...</option>
                            <option value="1">Empty</option>
                            <option value="2">Empty</option>
                        </select>
                    </div>

                    <!-- Centro de costo -->
                    <div class="mx-4">
                        <label for="CentroDeCosto" class="mb-1">Centro de costo </label>
                        <select class="form-select" aria-label="CentroDeCosto">
                            <option selected>Buscar...</option>
                            <option value="1">Empty</option>
                            <option value="2">Empty</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- The invoice -->
            <div class="px-3 py-2" style="background-color: #FFF;">
                <!-- Factura Dropdow -->
                <div class="dropdown text-end mt-4 pt-1">
                    <button class="btn dropdown-toggle p-0 pe-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Factura
                    </button>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Empty</a></li>
                        <li><a class="dropdown-item" href="#">Empty</a></li>
                    </ul>
                </div>

                <!-- HEADER INVOICE-->

                <!-- Seccion1 Entreprise Detaills-->
                <div class="d-flex justify-content-between align-items-center px-3 py-2 mt-1">
                    <!-- Logo -->
                    <img src="./assets/icons/DreamServicesLogo2.png" style="max-width: 100%; max-height: 53px;">

                    <!-- Entreprice detaills -->
                    <div class="text-center">
                        <p class="m-0" style="font-size: 23px;">Dreamed Services SRL</p>
                        <p class="m-0">RNC o Cedula: 123456789 </p>
                        <p>info@dreamedservices.com</p>
                    </div>

                    <!-- NFC -->
                    <div>


                        <div class="d-flex align-items-center">
                            <h3 class="m-0">NFC</h3>
                            <input type="text" placeholder="1234" class="ms-2 p-2">
                            <button class="btn">
                                <i class="bi bi-gear"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Seccion2 Client Info  -->
                <div class="row">

                    <div class="col-6 d-flex flex-column">

                        <!-- Contacto -->
                        <div class="d-flex align-items-center">
                            <span class="me-2">Contacto <span class="text-success">*</span></span>


                            <select class="form-select w-50" aria-label="Default select example">
                                <option selected>Buscar...</option>
                                <option value="1">Empty</option>
                                <option value="2">Empty</option>
                                <option value="3">Empty</option>
                            </select>

                            <span class=" ms-2 text-success">+Nuevo contacto</span>
                        </div>

                        <!-- RNC o Cedula -->
                        <div class="d-flex align-items-center my-2">
                            <span class="me-2">RNC o Cedula <span class="text-success">*</span></span>


                            <select class="form-select w-50" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">Empty</option>
                                <option value="2">Empty</option>
                                <option value="3">Empty</option>
                            </select>

                            <span class="ms-2 text-success">?</span>
                        </div>

                        <!-- Telefono -->
                        <div class="d-flex align-items-center my-2">
                            <span class="me-2">Telefono<span class="text-success">*</span></span>


                            <select class="form-select w-50" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">Empty</option>
                                <option value="2">Empty</option>
                                <option value="3">Empty</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-6 d-flex flex-column">

                        <!-- Fecha -->
                        <div class="d-flex align-items-center justify-content-end">
                            <span class="me-2">Contacto <span class="text-success">*</span></span>


                            <input type="date" class="border border-1 rounded py-2 px-3">
                            <span class="ms-2 text-success">?</span>
                        </div>

                        <!-- Plazo de pago -->
                        <div class="d-flex align-items-center my-2 justify-content-end">
                            <span class="me-2">Plazo de pago<span class="text-success">*</span></span>


                            <select class="form-select w-25" aria-label="Default select example">
                                <option selected>Selecionar</option>
                                <option value="1">Empty</option>
                                <option value="2">Empty</option>
                                <option value="3">Empty</option>
                            </select>

                            <span class="ms-2 text-success">?</span>
                        </div>

                        <!-- Vencimiento -->
                        <div class="d-flex align-items-center justify-content-end">
                            <span class="me-2">Vencimiento<span class="text-success">*</span></span>


                            <input type="date" class="border border-1 rounded py-2 px-3">
                            <span class="ms-2 text-success">?</span>
                        </div>
                    </div>

                </div>

                <!-- BODY INVOICE -->

                <!-- Table -->
                <table class="table align-middle table-borderless mt-3">
                    <thead class="text-muted small">
                        <tr class="border-bottom">
                            <th>Producto</th>
                            <th>Referencia</th>
                            <th>Precio</th>
                            <th>Desc %</th>
                            <th>Impuesto</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="border-bottom">
                            <td>
                                <select class="form-select form-select-sm text-muted">
                                    <option selected>Buscar producto o servicio.</option>
                                </select>
                            </td>
                            <td><input type="text" class="form-control form-control-sm text-muted" placeholder="Referenci"></td>
                            <td><input type="text" class="form-control form-control-sm text-muted" placeholder="Precio u"></td>
                            <td><input type="text" class="form-control form-control-sm text-muted" placeholder="%"></td>
                            <td>
                                <select class="form-select form-select-sm text-muted">
                                    <option selected>Impuesto</option>
                                </select>
                            </td>
                            <td><textarea class="form-control form-control-sm text-muted rounded " style="min-height: 100px;" rows="1"></textarea></td>
                            <td>
                                <input type="number" class="form-control form-control-sm text-center" min="0" value="0">
                            </td>
                            <td class="text-muted">RD$ 0.00</td>
                            <td><i class="bi bi-x text-secondary" role="button"></i></td>
                        </tr>


                        <tr class="border-bottom">
                            <td>
                                <select class="form-select form-select-sm text-muted">
                                    <option selected>Buscar producto o servicio.</option>
                                </select>
                            </td>
                            <td><input type="text" class="form-control form-control-sm text-muted" placeholder="Referenci"></td>
                            <td><input type="text" class="form-control form-control-sm text-muted" placeholder="Precio u"></td>
                            <td><input type="text" class="form-control form-control-sm text-muted" placeholder="%"></td>
                            <td>
                                <select class="form-select form-select-sm text-muted">
                                    <option selected>Impuesto</option>
                                </select>
                            </td>
                            <td><textarea class="form-control form-control-sm text-muted rounded" rows="1" style="min-height: 100px;"></textarea></td>
                            <td>
                                <input type="number" class="form-control form-control-sm text-center" min="0" value="0">
                            </td>
                            <td class="text-muted">RD$ 0.00</td>
                            <td><i class="bi bi-x text-secondary" role="button"></i></td>
                        </tr>

                        <tr>
                            <td>
                                <select class="form-select form-select-sm text-muted">
                                    <option selected>Buscar producto o servicio.</option>
                                </select>
                            </td>
                            <td><input type="text" class="form-control form-control-sm text-muted" placeholder="Referenci"></td>
                            <td><input type="text" class="form-control form-control-sm text-muted" placeholder="Precio u"></td>
                            <td><input type="text" class="form-control form-control-sm text-muted" placeholder="%"></td>
                            <td>
                                <select class="form-select form-select-sm text-muted">
                                    <option selected>Impuesto</option>
                                </select>
                            </td>
                            <td><textarea class="form-control form-control-sm text-muted rounded" style="min-height: 100px;" rows="1"></textarea></td>
                            <td>
                                <input type="number" class="form-control form-control-sm text-center" min="0" value="0">
                            </td>
                            <td class="text-muted">RD$ 0.00</td>
                            <td><i class="bi bi-x text-secondary" role="button"></i></td>
                        </tr>
                    </tbody>
                </table>

                <hr class="mt-2">

                <button class="btn text-success mb-5">+ Agregar linea</button>

                <!-- Sums and discounts -->

                <div class="row">
                    <!-- Signature -->
                    <div class="col-4 text-center px-3 py-4 mt-5" style="border: 3px dashed #888; max-height: 130px;">
                        <p class="fs-3 mb-0 text-secondary">Utilizar mi firma</p>
                        <span class="text-secondary">178 x 51 pixeles</span>
                    </div>

                    <!-- Sums -->
                    <div class="col d-flex justify-content-end">

                        <div class="row gx-5  align-items-center">

                            <!-- Operations -->
                            <div class="row">
                                <div class="col">
                                    <button class="btn text-success text-end mx-auto" style="min-width: 200px;">+ Agregar Retencion</button>
                                    <p class="text-end">Subtotal</p>
                                    <p class="text-end">Descuento</p>
                                    <p class="text-end">Subtotal</p>
                                </div>

                                <!-- Amounts -->
                                <div class="col">
                                    <button class="btn text-success text-end">+ Agregar Conduce <span class="text-success"> ?</span></button>
                                    <p class="text-end">RD$ 0.00</p>
                                    <p class="text-end">-RD$ 0.00</p>
                                    <p class="text-end">RD$ 0.00</p>
                                </div>

                                <hr>
                            </div>


                            <!-- Results -->
                            <div class="row">
                                <div class="col text-end">
                                    <h2>Total</h2>
                                </div>

                                <div class="col text-end">
                                    <h2>RD$ 0.00</h2>
                                </div>
                            </div>






                        </div>
                    </div>
                </div>

                <!-- Terms and conditions -->

                <div class="row mt-5">
                    <div class="col-7">
                        <p>Terminos y condiciones <span class="text-success">?</span></p>
                        <input class="w-100 rounded pt-0  border border-1" type="text" placeholder="Visible en la impresion del docuemento" style="min-height: 90px;">
                    </div>

                    <div class="col">
                        <p>Notas <span class="text-success">?</span></p>
                        <input class="w-100 rounded pt-0 border border-1" type="text" style="min-height: 90px;">
                    </div>
                </div>

                <div class="row mt-3">
                    <p class="mb-0">Pie de factura</p>
                    <input class="border border-1 rounded" type="text" placeholder="Visible en la impresion del documento" style="min-height: 70px;">
                </div>

                <p class="mt-5 fs-6">Los campos marcados con <span class="text-success">*</span> son obligatorios</p>
            </div>

            <!-- Payments -->
            <div class="row  mt-4 rounded px-3 py-4" style="background-color: #FFF;">

                <div class="col">
                    <b>Pago recibido</b>
                    <p>Si te hicieron un pago asociado a esta venta puedes hacer aqui su registro</p>
                </div>

                <div class="col text-end">
                    <p class="text-blue"><i class="bi bi-database-gear text-blue"></i> Agregar Pago</p>
                </div>
            </div>


            <!-- Comments -->

            <div class="row mt-4">
                <h5>Comentarios <span class="text-success">?</span></h5>

                <!-- Text area -->
                <div class="row w-100 g-2  rounded  text-center text-md-start">

                    <!-- Blue circle -->
                    <div
                        class="rounded-circle bg-primary text-white text-center me-2"
                        style="width: 40px; height: 42px; line-height: 40px">
                        J
                    </div>

                    <!-- Input -->
                    <div class=" col-10 my-auto">
                        <textarea class="w-100 border border-1 rounded" style="min-height: 70px;"></textarea>
                        <p class="fs-6">Utiliza los comentarios para agregar informacion importante. No son visibles en la impresion</p>
                    </div>
                </div>

            </div>

            <!-- Save buttons -->

            <div class="d-flex justify-content-end mt-5">

                <button class="btn mx-3" style="min-width: 200px; background-color: #FFF;">Cancelar</button>
                <button class="btn  mx-3" style="min-width: 200px; background-color: #FFF;">Vista Previa</button>
                <button class="btn  mx-3" style="min-width: 200px; background-color: #FFF;"> Guardar y crear nueva tabla</button>
                <button class="btn text-light bg-blue text-light" style="min-width: 200px;">Guardar</button>

            </div>





        </div>

        </div>

    </main>


</body>

<script type="module" src="./Scripts/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

</html>