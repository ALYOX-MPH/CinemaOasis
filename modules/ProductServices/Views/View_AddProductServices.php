<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Styles/bootstrap.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>

<body class="container-fluid" style="background-color: #f5f5fb;">


<!-- Cabezera Principaal -->
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
        <div class="col mt-5 " id="MainContainer">
            <div class="row g-3">
                <div class="col bg-light p-4 border rounded-4">
                    <label class="col-12" for="exampleFormControlInput1" class="form-label"><h5 class=" border-bottom border-secondary">INFORMACION  <i class="bi bi-info-circle fs-6 ps-2"></i></h5><p>Indica los datos básicos de tu producto o servicio</p></label>
                    <div class="btn-group col-10" role="group" aria-label="Tipo de opción">
                    <input type="radio" class="btn-check" name="tipo" id="producto" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="producto">Producto</label>

                    <input type="radio" class="btn-check" name="tipo" id="servicio" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="servicio">Servicio</label>

                    <input type="radio" class="btn-check" name="tipo" id="combo" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="combo">Combo</label>
                  </div>

                  <!-- FORM ADD PRODUCT -->
                 <div class="mt-4">
                    
                    <form>
                        <!-- PRODUCT NAME  -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del producto o servicio</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ej. Camiseta de algodón">
                            
                        </div>

                        <!-- REFERENCIA -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Referencia</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            
                        </div>
                        
                        <!-- TIPOS DE REFERENCIA -->
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tipo de referencia</label>
                            <div class="input-group mb-3">
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Buscar...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <!-- UNIDAD DE MEDIDAS  -->
                         <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Unidad de medida</label>
                            <div class="input-group mb-3">
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Buscar...</option>
                                    <option value="1">UNIDAD</option>
                                    <option value="2">PAQUETE</option>
                                </select>
                            </div>
                        </div>

                        <!-- CATEGORIA -->
                         <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                            <div class="input-group mb-3">
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Buscar...</option>
                                    <option value="1">IMPRECION</option>
                                </select>
                            </div>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </form>
                 </div>

                 <!-- PRICE -->
                 <div class="row-g-3 mt-4 bg-light p-4 border rounded-4">
                    <label class="col-12" for="exampleFormControlInput1" class="form-label"><h5 class=" border-bottom border-secondary">PRECIO  <i class="bi bi-tag fs-6 ps-2"></i></h5></label>
                    
                    <p>Indica el precio de tu producto o servicio</p>

                    <div class="row alig-item-center align-items-center justify-content-center" >
                    <div class="col-4 pt-2">
                        <label for="exampleFormControlInput1" class="form-label fw-bold" >Precio Base</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Precio Base">
                    </div>

                    <div class="col-3 pt-2" >
                        <label for="exampleFormControlInput1" class="form-label fw-bold" >Inpuesto</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Inpuesto">
                    </div>

                    <div class="col-5 pt-2">
                        <label for="exampleFormControlInput1" class="form-label fw-bold" >Precio Total</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Precio Total">
                    </div>
                </div>
                </div>

                <!-- PRICE LIST -->
                  <div class="row-g-3 mt-4 bg-light p-4 border rounded-4">
                    <label class="col-12" for="exampleFormControlInput1" class="form-label"><h5 class=" border-bottom border-secondary">LISTA DE PRECIOS   <i class="bi bi-tags fs-6 ps-2"></i></h5></label>
                    
                    <p>Asigna varios precios con valor fijo o un % de descuento sobre el precio base.</p>

                    <!-- PRICE LIST TOOL -->
                    <div class="row alig-item-center align-items-center justify-content-center" >
                    <div class="col-7 pt-2">
                        <label for="exampleFormControlInput1" class="form-label fw-bold" >Lista de precios</label>
                         <div class="input-group mb-3 pt-2">
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Buscar...</option>
                                    <option value="1">PRECIO 1</option>
                                    <option value="2">PRECIO 2</option>
                                    <option value="3">PRECIO 3</option>
                                </select>
                            </div>
                    </div>

                    <!-- TEXT VALUE -->
                    <div class="col-5" >
                        <label for="exampleFormControlInput1" class="form-label fw-bold" >Valor</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Valor">
                    </div>
                </div>
                </div>

                <!-- CAMPOS ADICIONALES -->
                  <div class="row-g-3 mt-4 bg-light p-4 border rounded-4">
                    <label class="col-12" for="exampleFormControlInput1" class="form-label"><h5 class=" border-bottom border-secondary">CAMPOS ADICIONALES  <i class="bi bi-info-circle fs-6 ps-2"></i></h5></label>
                    <p>Conoce cómo crear campos personalizables </p>
                    <div class="row alig-item-center justify-content-center" >
                        <div class="col-9 pt-2">
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Buscar...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            </div>
                    </div>


                    <!-- TEXT ADD -->
                    <div class="col-3 pt-2" >
                        <button class="btn btn-secondary" type="button">Agregar</button>
                    </div>
                </div>
                </div>

            <!-- CONFIGURACIÓN CONTABLE -->
             <div class="row-g-3 mt-4 bg-light p-4 border rounded-4">
                    <label class="col-12" for="exampleFormControlInput1" class="form-label"><h5 class=" border-bottom border-secondary">CONFIGURACIÓN CONTABLE <i class="bi bi-gear-fill fs-6 ps-2"></i></h5></label>
                    <p>Configura las cuentas contables en las que se registrarán los movimientos.</p>
                    <div class="row alig-item-center justify-content-center" >
                        <h6 class="col-12">Cuentas de ingresos</h6>
                        <div class="col-12 pt-2">
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Buscar...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            </div>
                    </div>
                </div>
               </div>

        </div>
                <!-- hh -->
        <!-- IMG PRODUCT -->
        <div class="col-4 bg-light border rounded-4 ms-3" style="max-height: 63vh;" >
            <img class="w-100 mb-2 border-bottom bordeer-1" src="./assets/icons/photo.png" alt="">

            <!-- TEXT  -->
            <div class="border-bottom row alig-item-center align-items-center justify-content-center" >
                    <div class="col-6 pt-2 text-center d-flex flex-column ">
                        <h5>Lista de precios</h5>
                        <h4>RD$ 0.00 DOP</h4>
                    </div>
             </div>  
             
             <!-- TEXT ADD AND CREATE ANOTHER -->
            <div class="row alig-item-center align-items-center justify-content-center" >
                    <div class="col-7 pt-2 text-center d-flex flex-column"> 
                        <p class="mb-2">Guardar y crear otro</p>  
                    </div>
                    
                    <!-- BUTTONS  -->
                    <div class="d-flex pt-5 ml-5 justify-content-center">
                        <button class=" btn-lg me-5 btn btn-light border" type="button">Cancelar</button>
                        <button class=" btn-lg pt-2 btn btn-secondary" type="button">Gueardar</button>
                    </div>
                    
              </div>      
            
                
        </div>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>