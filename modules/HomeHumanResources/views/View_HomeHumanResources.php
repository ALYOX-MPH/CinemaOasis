<main class="row container-fluid justify-content-center mx-auto mt-5 pb-5 ">

    

    <div class="col pt-3 SeccionContainer mt-5">

    
        <!-- Text and buttons -->
        <div class="row pb-5">

            <!-- Contact and buttos -->
            <div class="d-flex justify-content-between">

                <h3>Recursos Humanos</h4>
                
                    <!-- Buttons and Dropdown -->
                    <div class="col d-flex me-5  align-items-center justify-content-end ">
                        <a class="text-success" href="#"><i class="bi bi-info-circle p-2"></i>Ayuda</a>
                    </div>
                        
            </div>

            <div class="row mt-3">
                <p>Aqui puedes ver tus resumenes y accesos rapidos</p>
            </div>
        
        <!-- TABLA DE INICIO -->
        <div class="container-xl border border-2 rounded mt-0  border-top border-bottom" style="background-color: #FFF;">
            <div class="row mt-2 pt-3 d-flex justify-content-center">

            <!-- Periodo Actual -->
                <div class="col text-center border-end">
                    <h3><i class="bi bi-calendar p-2"></i></i>Periodo Actual</h3>
                    <p class=" text-secondary fs-4">0</p>
                </div>

                <!-- No. Empleados -->
                <div class="col text-center border-end">
                    <h3><i class="bi bi-people-fill p-2"></i>No.Empleados</h3>
                    <p class="text-secondary fs-4">0</p>
                </div>

                <!-- Total de Pago -->
                <div class="col text-center border-end">
                    <h3><i class="bi bi-cash-coin p-2"></i>Total Pago</h3>
                    <p class="text-secondary fs-4">0</p>
                </div>

                <!-- Total de Costo -->
                <div class="col text-center border-end">
                    <h3><i class="bi bi-coin p-2"></i>Total de Costo</h3>
                    <p class="text-secondary fs-4">0</p>
                </div>

                <!-- BUTTON CALCULTE PAYROLL -->
                <div class="col text-center">
                    <button class="btn btn-lg btn-success mt-3 " type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-plus-circle pe-2"></i>Calcular Nomina 
                    </button>
                </div>

            </div>
        </div>

        <!-- Grafico de nomina -->
        <div class="row mt-5">
            <div class="col m-2" style="background-color: #FFF;">
                <h3>Costo de nomina vs Pago de nomina</h3>
                <div class="col">
                 <canvas id="ventasChart" class="mt-4" style="max-height: 400px;"></canvas>
                </div>
            </div>

            <!-- Indicadores -->
            <div class="col m-2" style="background-color: #FFF;">
                 <h3 class="p-3">Indicadores</h3>
                <div class="col-12 ">

                <!-- Salario Minimo Nacional -->
                   <div class="row border-bottom">
                        <h5 class="text-secondary"><i class="bi bi-cash-stack fs-2 p-2"></i>2024</h5>
                        <p class="col ps-4 fs-4">Salario Minimo Nacional </p>
                        <p class="col d-flex justify-content-end fs-4">RD$15,352</p>
                    </div>
                    <!-- AFP -->
                    <div class="row border-bottom">
                        <h5 class="text-secondary"><i class="bi bi-coin fs-2 p-2"></i>2024</h5>
                        <p class="col ps-4 fs-4">AFP</p>
                        <p class="col d-flex justify-content-end fs-4">RD$355,352</p>
                    </div>
                    <!-- ARL -->
                    <div class="row border-bottom">
                        <h5 class="text-secondary"><i class="bi bi-plus-slash-minus fs-2 p-2"></i>2024</h5>
                        <p class="col ps-4 fs-4">SFS</p>
                        <p class="col d-flex justify-content-end fs-4">RD$320,352</p>
                    </div>
                    <!-- SRL -->
                    <div class="row border-bottom">
                        <h5 class="text-secondary"><i class="bi bi-building-gear fs-2 p-2"></i>2024</h5>
                        <p class="col ps-4 fs-4">SRL</p>
                        <p class="col d-flex justify-content-end fs-4">RD$75,352</p>
                    </div>
                </div>
            </div>

    </div>

    <!-- Grafico de contrataciones -->
    <div class="row mt-3">
            <div class="col m-2" style="background-color: #FFF;">
                <h3>Contratacione por mes</h3>
                <div class="col">
                 <canvas id="humanChart" class="mt-4" style="max-height: 400px;"></canvas>
                </div>
            </div>
            <!-- Historial de nomina -->
            <div class="col m-2" style="background-color: #FFF;">
                 <h3 class="p-3">Historial</h3>
                <div class="col-12 ">
                    <!-- CONTENIDO DEL HISTORIAL -->
                   <div class="row border-bottom">
                        <h5 class="fs-4"><i class="bi bi-send fs-2 p-2"></i>Generaste la nomina de <span class="text-success">Marzo-2024</span></h5>
                        <p class="col text-secondary ps-5">Calculaste la nomina de 20 empleados</p>
                        <p class="col text-success d-flex justify-content-end fs-4 pe-4">Ir</p>
                    </div>
                    <div class="row border-bottom">
                        <h5 class="fs-4"><i class="bi bi-send fs-2 p-2"></i>Generaste la nomina de <span class="text-success">Abril-2024</span></h5>
                        <p class="col text-secondary ps-5">Calculaste la nomina de 20 empleados</p>
                        <p class="col text-success d-flex justify-content-end fs-4 pe-4">Ir</p>
                    </div>
                    <div class="row border-bottom">
                        <h5 class="fs-4"><i class="bi bi-send fs-2 p-2"></i>Generaste la nomina de <span class="text-success">Mayo-2024</span></h5>
                        <p class="col text-secondary ps-5">Calculaste la nomina de 18 empleados</p>
                        <p class="col text-success d-flex justify-content-end fs-4 pe-4">Ir</p>
                    </div>
                    <div class="row border-bottom">
                        <h5 class="fs-4"><i class="bi bi-send fs-2 p-2"></i>Generaste la nomina de <span class="text-success">Junio-2024</span></h5>
                        <p class="col text-secondary ps-5">Calculaste la nomina de 16 empleados</p>
                        <p class="col text-success d-flex justify-content-end fs-4 pe-4">Ir</p>
                    </div>
                </div>
            </div>

    </div>
</main>