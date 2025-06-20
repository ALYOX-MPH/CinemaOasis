<!-- SIDEBAR -->

<div class="col-1">

  <!-- Old version -->

  <!-- <div style="max-width: 45%;" class="offcanvas offcanvas-start " data-bs-scroll="false" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" data-bs-backdrop="static">

    <div class="offcanvas-header">
    </div>

    <div class="offcanvas-body mt-3" style="overflow: hidden;">
      <nav class=" offcanvas-body d-flex flex-column gx-3">

        <a class="nav-link my-2" href="/Home"><i class="bi bi-house-door-fill"></i> Inicio</a>
        <a class="nav-link my-2" href="#"><i class="bi bi-receipt"></i> Factura electrónica</a>

        <div class="dropdown">
          <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-graph-up"></i> Ingresos
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/Invoices">Facturas de venta</a></li>
            <li><a class="dropdown-item" href="#">Factura de venta recurrentes</a></li>
            <li><a class="dropdown-item" href="#">Pagos recibidos</a></li>
            <li><a class="dropdown-item" href="#">Notas de credito</a></li>
            <li><a class="dropdown-item" href="#">Cotizaciones</a></li>
            <li><a class="dropdown-item" href="#">Conduces</a></li>
          </ul>
        </div>


        <a class="nav-link my-2" href="#"><i class="bi bi-cart-check"></i> Compras</a>
        <a class="nav-link my-2 my-2" href="/Contacts"><i class="bi bi-people-fill"></i> Contactos</a>


        <div class="dropdown">
          <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-box-seam"></i> Inventario
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/ProductServices">Productos y servicios</a></li>
            <li><a class="dropdown-item" href="#">Valor de inventario</a></li>
            <li><a class="dropdown-item" href="#">Ajustes de inventario</a></li>
            <li><a class="dropdown-item" href="#">Gestion de productos</a></li>
            <li><a class="dropdown-item" href="#">Lista de precios</a></li>
            <li><a class="dropdown-item" href="#">Almacenes</a></li>
            <li><a class="dropdown-item" href="#">Categorias</a></li>
            <li><a class="dropdown-item" href="#">Atributos</a></li>
          </ul>
        </div>


        <a class="nav-link my-2" href="#"><i class="bi bi-bank"></i> Bancos</a>

        <a class="nav-link my-2" href="#"><i class="bi bi-journal-check"></i> Contabilidad</a>
        <a class="nav-link my-2" href="#"><i class="bi bi-clipboard-data"></i> Reportes</a>
        <a class="nav-link my-2" href="#"><i class="bi bi-gear-fill"></i> Configuración</a>
        <hr>
        <small class="text-muted ms-2">Descubre más soluciones</small>

        <div class="dropdown">
          <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-vcard"></i> Recursos humanos
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Inicio</a></li>
            <li><a class="dropdown-item" href="/HumanResources">Empleados</a></li>
            <li><a class="dropdown-item" href="/Payroll">Nominas</a></li>
            <li><a class="dropdown-item" href="#">Liquidaciones</a></li>
            <li><a class="dropdown-item" href="#">Gestion de tiempo y horario</a></li>
            <li><a class="dropdown-item" href="#">Gestion de desempeño</a></li>
            <li><a class="dropdown-item" href="#">Autoservicio de Empleado</a></li>
            <li><a class="dropdown-item" href="#">Reportes y Analitica</a></li>
            <li><a class="dropdown-item" href="#">Cumplimiento Normativo</a></li>
          </ul>
        </div>


        <a class="nav-link my-2" href="#"><i class="bi bi-upc-scan"></i> POS</a>
        <a class="nav-link my-2" href="#"><i class="bi bi-person-lines-fill"></i> Portal de clientes</a>

      </nav>
    </div>
  </div> -->


  <!-- New version -->
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
                <a class="dropdown-item my-2" href="/HomeHumanResources">Inicio</a>
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

</div>