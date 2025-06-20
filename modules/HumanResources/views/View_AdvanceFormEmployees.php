<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">

    <title>Agregar Empleados</title>
</head>



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
                            <img style="width: 100px;" class="mx-2" width="80px" src="./assets/icons/Logo-Dreamed-Services.png" alt="">
                        </li>

                    </ul>
                </div>

            </div>
        </nav>


    </header>

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


        <!-- RIGHT CONTENT -->

        <div class="col px-4 pt-3 SeccionContainer mt-4 w-100">

            <!-- Text Nuevo Empleado -->
            <div class="row text-center text-md-start">
                <h4>Nuevo Empleado</h4>
                <p>Crea tus Empleados para asociarlos en los documentos y nominas que registres a su nombre</p>
            </div>

            <div class="row row-cols-md-3 row-cols-1 container-xxl">

                <!-- Forms Section -->
                <div class="col-12 col-md-8">

                    <!-- Datos generales -->
                    <form class="row g-3 my-2 rounded p-4 text-center text-md-start" style="background-color: #FFF;">

                        <b>Datos generales</b>
                        <p class="my-0">Incluye los datos principales de tu nuevo empleado</p>

                        <!-- Employees input -->
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Empleado">
                        </div>

                        <!-- Number input -->
                        <div class="col-md-6">
                                <input type="tel" class="form-control" id="inputTel4" placeholder="Numero Telefonico">
                            </div>

                        <!-- Tipo de identificacion -->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Tipo de identificacion</label>
                            <select id="inputState" class="form-select">
                                <option selected>Cedula</option>
                                <option>Pasaporte</option>
                            </select>
                        </div>

                        <!-- TIPO DE DEPARTAMENTO -->
                        <div class="col-md-6">
                                <label for="inputState" class="form-label">Tipo de Departamento<i class="bi bi-plus text-success fs-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i></label>
                                <select id="inputState" class="form-select">
                                    <option selected>Contavilidad</option>
                                    <option>Ventas</option>
                                    <option>Almacen</option>
                                    <option>Recursos Humanos</option>
                                    <option>Marketing</option>
                                    <option>Servicio al Cliente</option>
                                </select>
                            </div>

                        <!--FECHA DE INICIO LABORAL  -->
                        <div class="col-6">
                                <label for="inputAddress" class="form-label">Fecha de Inicio laboral</label>
                                <input type="date" class="form-control">
                        </div>

                         <div class="col-6">
                                <label for="inputAddress" class="form-label">Condición Medica</label>
                                <input type="text" class="form-control">
                            </div>

                        <!-- Municipio/provincia input  -->
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Municipio o provincia</label>
                            <input type="text" class="form-control">
                        </div>

                        <!-- SALARIO -->
                        <div class="col-md-6">
                                <label for="inputSalario4" class="form-label " min="0" step="0.01">Salario</label>
                                <input type="number" class="form-control" id="inputSalario4" placeholder="0.00 DOP" min="0" step="0.01">
                        </div>
                    </form>

                    <!-- HORARIO DEL EMPLEADO -->

                    <form class="row g-3 my-3 rounded p-3 text-center text-md-start" style="background-color: #FFF;">

                        <b>Horarios del empleado</b>
                        <p class="my-0">Agrega estos datos para hacer reportes detallados</p>

                        <!-- Email input -->
                        <div class="col-md-12">
                                <label for="inputState" class="form-label">Tanda del empleado</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Completa</option>
                                    <option>Vespertina</option>
                                    <option>Matutina</option>
                                    <option>Nocturna</option>

                                </select>
                            </div>

                        <!-- DESDE -->
                        <div class="col-md-6">
                            <label for="inputFirstHoure" class="form-label">Desde que hora</label>
                            <input type="time" class="form-control" id="inputFirstHoure">
                        </div>

                        <!-- HASTA -->
                        <div class="col-md-6">
                            <label for="inputFirstHoure" class="form-label">Hasta que hora</label>
                            <input type="time" class="form-control" id="inputFirstHoure">
                        </div>

                        <div class="row mt-4 border border-1 rounded mx-auto p-2">
                            <b class="mb-2">Autoservicio</b>
                            <p>Vincula tus empleados al Autoservicio para que recivan notificaciones o tareas </p>
                            <button class="btn btn-info mx-auto mx-md-0" style="max-width: 180px;">+ Asociar empleado</button>
                        </div>

                    </form>

                    <!-- DESEMPEÑO DEL EMPLEADO -->
                    <form class="row g-3 my-3 rounded p-3 text-center text-md-start" style="background-color: #FFF;">

                        <b>Desempeño del empleado</b>
                        <p>Agrega el desempeño del empleado para hacer reportes analiticos </p>


                        <!-- CONOCIMIENTOS TECNICOS -->
                        <div class="col-12">
                            <label for="inputState" class="form-label">Conocimientos tecnicos</label>
                            <select id="inputState" class="form-select">
                                <option selected>Si</option>
                                <option>No</option>
                                <option>Practicante</option>
                            </select>
                        </div>

                        <!-- PRODUCTIVIDA -->
                        <div class="col-md-6">
                            <label for="inputProducti" class="form-label">Productividad</label>
                            <input type="number" class="form-control" id="inputProducti">
                        </div>

                        <!-- CERTIFICACION -->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Certificacion</label>
                            <select id="inputState" class="form-select">
                                <option selected>Si</option>
                                <option>No</option>
                            </select>
                        </div>

                       

                        <!-- AREAS DE MEJORAS -->
                        <div class="col-md-12">
                            <label for="inputMejoras" class="form-label">Áreas de Mejora</label>
                            <input type="text" class="form-control" id="inputMejoras">
                        </div>
                    </form>

                    <!-- ENVIO DEL CERTIFICADO -->
                    <form class="row g-3 my-2 rounded p-3 text-center text-md-start" style="background-color: #FFF;">

                        <b>Certificacion del empleado</b>
                        <p class="my-0">Agrega las certificaciones que tiene el empleado </p>

                        <!-- INSTITUCION -->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Institucion o Recinto</label>
                            <input type="text" class="form-control" id="inputState">
                        </div>

                        <!-- CERTIFICACION -->
                        <div class="col-md-12">
                            <label for="file-input" class="form-label">Certificado</label>
                            <input class="form-control" type="file" id="file-input" name="my-file">
                            <div class="form-text">El archivo debe ser de tipo Pdf</div>
                        </div>



                    </form>

                    <div class="row g-2 my-2 rounded p-3 text-center text-md-start align-items-center justify-content-center" style="background-color: #FFF;">
                        <b>Comentarios</b>
                        <p>Registra aqui las observaciones importantes sobre tu empleado</p>

                        <div
                            class="rounded-circle bg-primary text-white text-center me-2"
                            style="width: 40px; height: 42px; line-height: 40px">
                            J
                        </div>

                        <div class=" col-10">
                            <textarea class="w-100" name="" id=""></textarea>
                        </div>

                        <p style="font-size: 13px;">Solo tu puedes ver los comentarios</p>
                    </div>
                </div>

                <!-- Save buttons Secction -->
                <div class="col">
                    
                    <div class="row p-2 mt-2 gy-2 gx-2" style="background-color: #FFF; "  >

                        
                        <img class="w-100 mb-2 border-bottom bordeer-1" src="./assets/icons/employees.png" alt="">

                        

                        <button class="col-12 btn btn-light rounded">Guardar y crear otro</button>
                        <button class="col-12 col-md-6 btn btn-light rounded ">Cancelar</button>
                        <button class="col-12 col-md-6 btn btn-success text-light rounded">Crear Empleado</button>
                    </div>
                </div>

            </div>


        </div>

         <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Form Title -->
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nuevo Departamento</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <form class="row g-3">
                            <!-- DEPARTAMENT INPUT -->
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="inputDepartamento" placeholder="Nombre del departamento">
                            </div>

                    <!-- Footer Buttons -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light border border-1 rounded" data-bs-dismiss="modal">Cancelar</a></button>
                        <button type="submit" class="btn btn-success">Crear Departamento</button>
                    </div>
                </div>
            </div>
        </div>

    </main>


</body>



<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>