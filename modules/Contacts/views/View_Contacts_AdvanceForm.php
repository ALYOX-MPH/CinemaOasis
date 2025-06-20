<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">

    <title>Agregar contacto</title>
</head>


<style>
    :root {
        --primary_Color: #6ddbd0;
        --background_Color: #f0f2f9;
        --Secundary_background_color: #FFF;
        --Green_Color: #46c89b;
        --Red_Color: #ce5956
    }




    a {
        text-decoration: none !important;
        color: #000 !important;
    }



    #SEARCHICON {
        position: relative;
        left: -45px;
    }

    .WelcomeHome_Container {
        border: 3px solid var(--Green_Color);
    }

    #SubCard_for_Receivable {
        position: relative;
    }

    #SubCard_for_Receivable::before {
        content: "";
        position: absolute;
        left: -10px;
        background-color: var(--Green_Color);
        height: 90%;
        width: 4px;
    }

    #SubCard_for_Receivable-red {
        position: relative;
    }

    #SubCard_for_Receivable-red::before {
        content: "";
        position: absolute;
        left: -10px;
        background-color: var(--Red_Color);
        height: 90%;
        width: 4px;
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

            <!-- Text NuevoContacto -->
            <div class="row text-center text-md-start">
                <h4>Nuevo contacto</h4>
                <p>Crea tus contactos para asociarlos en los documentos y transacciones que registres a su nombre</p>
            </div>

            <div class="row row-cols-md-3 row-cols-1 container-xxl">

                <!-- Forms Section -->
                <div class="col-12 col-md-8">

                    <!-- Datos generales -->
                    <form class="row g-3 my-2 rounded p-4 text-center text-md-start" style="background-color: #FFF;">

                        <b>Datos generales</b>
                        <p class="my-0">Incluye los datos principales de tu nuevo contacto</p>

                        <!-- Cliente input -->
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Cliente">
                        </div>

                        <!-- Proveedor input -->
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Proveedor">
                        </div>

                        <!-- Tipo de identificacion -->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Tipo de identificacion</label>
                            <select id="inputState" class="form-select">
                                <option selected>Cedula</option>
                                <option>Pasaporte</option>
                            </select>
                        </div>

                        <!-- numero de identificacion -->
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Numero</label>
                            <input type="number" class="form-control">
                        </div>

                        <!--Nombre o razon social input  -->
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Nombre o razon social</label>
                            <input type="text" class="form-control">
                        </div>

                        <!-- Municipio/provincia input  -->
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Municipio o provincia</label>
                            <input type="text" class="form-control">
                        </div>

                        <!-- Direccion -->
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                    </form>

                    <!-- Informacion de contacto -->

                    <form class="row g-3 my-3 rounded p-3 text-center text-md-start" style="background-color: #FFF;">

                        <b>Informacion de contacto</b>
                        <p class="my-0">Agrega estos datos para comunicarte en culaquier momento con tu contacto</p>

                        <!-- Email input -->
                        <div class="col-12">
                            <label for="inputState" class="form-label">Correo electronico</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Ejemplo@email.com">
                        </div>

                        <!-- Telefono input -->
                        <div class="col-md-6">
                            <label for="inputPhone" class="form-label">Telefono</label>
                            <input type="number" class="form-control" id="inputPhone" placeholder="___ ___ ____">
                        </div>

                        <!-- Telefono 2 input -->
                        <div class="col-md-6">
                            <label for="inputPhone" class="form-label">Telefono 2</label>
                            <input type="number" class="form-control" id="inputPhone" placeholder="___ ___ ____">
                        </div>

                        <!-- Celular 2 input -->
                        <div class="col-md-6">
                            <label for="inputCellphone" class="form-label">Celular</label>
                            <input type="number" class="form-control" id="inputCellphone" placeholder="___ ___ ____">
                        </div>

                        <div class="row mt-4 border border-1 rounded mx-auto p-2">
                            <b class="mb-2">Personas asociadas</b>
                            <p>Vincula los datos de personas relacionadas a este contacto y activa notificaciones de vencimiento para tus clientes</p>
                            <button class="btn btn-info mx-auto mx-md-0" style="max-width: 180px;">+ Asociar persona</button>
                        </div>

                    </form>

                    <!-- Informacion comercial -->
                    <form class="row g-3 my-3 rounded p-3 text-center text-md-start" style="background-color: #FFF;">

                        <b>Informacion comercial</b>
                        <p>Agrega los datos administrativos y condiciones comerciales de tu contacto</p>


                        <!-- Tipo de NFC input -->
                        <div class="col-12">
                            <label for="inputState" class="form-label">Tipo de NFC</label>
                            <select id="inputState" class="form-select">
                                <option selected>Persona Fisica</option>
                                <option>Persona Juridica</option>
                            </select>
                        </div>

                        <!-- Limite de credito input -->
                        <div class="col-md-6">
                            <label for="inputCredit" class="form-label">Limite de credito</label>
                            <input type="number" class="form-control" id="inputCredit">
                        </div>

                        <!-- Plazo de pago -->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Plazo de pago</label>
                            <select id="inputState" class="form-select">
                                <option selected>Quincenal</option>
                                <option>Mensual</option>
                            </select>
                        </div>

                        <!-- Lista de precios -->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Lista de precios</label>
                            <select id="inputState" class="form-select">
                                <option selected>Selecionar</option>
                                <option>Mensual</option>
                            </select>
                        </div>

                        <!-- Vendedor -->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Vendedor</label>
                            <select id="inputState" class="form-select">
                                <option selected>Selecionar</option>
                                <option>Mensual</option>
                            </select>
                        </div>
                    </form>

                    <!-- Configuracion para contabilidad -->
                    <form class="row g-3 my-2 rounded p-3 text-center text-md-start" style="background-color: #FFF;">

                        <b>Configuracion para contabilidad</b>
                        <p class="my-0">Elige las cuentas contables que recibiran los movimientos de valores pendientes de pago <label class="text-success">Ver mas</label></p>

                        <!-- Cuenta por cobrar input -->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Cuenta por cobrar</label>
                            <select id="inputState" class="form-select">
                                <option selected>Cuenta por cobrar clientes</option>
                                <option>Empty</option>
                            </select>
                        </div>

                        <!-- Cuenta por pagar input -->
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Cuenta por pagar</label>
                            <select id="inputState" class="form-select">
                                <option selected>Cuenta por pagar proveedore</option>
                                <option>Empty</option>
                            </select>
                        </div>



                    </form>

                    <div class="row g-2 my-2 rounded p-3 text-center text-md-start align-items-center justify-content-center" style="background-color: #FFF;">
                        <b>Comentarios</b>
                        <p>Registra aqui las observaciones importantes sobre tu contacto</p>

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
                    <div class="row p-2 mt-2 gy-2 gx-2" style="background-color: #FFF;">

                        <span class="d-flex justify-content-between align-items-center">
                            <p>Enviar estado de cuenta</p>
                            <i class="bi bi-toggle-off mb-2" style="font-size: 28px;"></i>
                        </span>

                        <button class="col-12 btn btn-light rounded">Guardar y crear otro</button>
                        <button class="col-12 col-md-6 btn btn-light rounded ">Cancelar</button>
                        <button class="col-12 col-md-6 btn btn-success text-light rounded">Crear contacto</button>
                    </div>
                </div>

            </div>


        </div>



    </main>


</body>




<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>