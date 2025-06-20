<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Formulario básico de productos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="min-height: 500px;">

                <!-- FORMULARIO DEL MODAL -->
                <form method="POST" action="/ProductServices/AddProductService" class="row">

                    <!-- NAV-tabs -->
                    <nav>
                        <div class="nav nav-tabs " id="nav-tab" role="tablist">

                            <button class="nav-link text-body active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Servicios</button>


                            <button class="nav-link  text-secondary" disabled style="text-decoration: line-through;" id="nav-home-tab " data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Productos</button>

                            <button class="nav-link text-secondary" disabled style="text-decoration: line-through;" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Combo</button>



                        </div>
                    </nav>

                    <!-- MENSAJE DE CABESERA -->
                    <div class="col-12 pt-2 pb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ten en cuenta que, una vez creado, no podrás cambiar el tipo de artículo ni su condición variable.</label>
                    </div>

                    <!--TABS DE FORMULARIO  -->
                    <div class="tab-content" id="nav-tabContent">


                        <!-- FORMULARIO DE SERVICIOS  -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

                            <div class="row pt-3 gy-3">

                                <!-- Descripcion -->
                                <div class="col-12 ">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Descripcion del servicio</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ServiceDescription"></textarea>
                                </div>

                                <!-- Departamentos y precios -->
                                <div class="d-flex justify-content-between gap-3 mt-5">

                                    <!-- Departamentos -->
                                    <div>
                                        <select class="form-select" aria-label="Default select example" name="Department">
                                            <option selected>Departamento</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Diseño">Diseño</option>
                                            <option value="Desarrollo de Software">Desarrollo de Software</option>
                                            <option value="Servidores">Servidores</option>
                                        </select>
                                    </div>


                                    <!-- Precios -->
                                    <!-- Precio Base -->
                                    <div class="col-3">
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Precio Base" name="BasePrice">
                                    </div>

                                    <!-- Impuesto -->
                                    <div class="col-3">
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Impuesto" name="Impuesto">
                                    </div>

                                    <!-- Precio Total -->
                                    <div class="col-3">
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Precio Total" name="TotalPrice">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- FORMULARIO DE PRODUCTO -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <!-- PRODUCTOS -->
                            <div class="row">

                                <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Nombre</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
                                </div>
                                <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Unidad de Medida</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Unidad de Medida">
                                </div>


                                <div class="col-12">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Almacen</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Almacen">
                                </div>

                                <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Cantidad</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Cantidad">
                                </div>

                                <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Costo Inicial</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Costo Inicial">
                                </div>

                                <div class="row alig-item-center align-items-center justify-content-center">
                                    <div class="col-3 pt-2">
                                        <label for="exampleFormControlInput1" class="form-label fw-bold">Precio Base</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Precio Base">
                                    </div>

                                    <div class="col-3 pt-2">
                                        <label for="exampleFormControlInput1" class="form-label fw-bold">Inpuesto</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Inpuesto">
                                    </div>

                                    <div class="col-3 pt-2">
                                        <label for="exampleFormControlInput1" class="form-label fw-bold">Precio Total</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Precio Total">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- FORMULARIO DE COMBOS -->
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <!-- COMBOS -->
                            <div class="row pt-3">

                                <div class="col-6 ">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Nombre</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
                                </div>

                                <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Unidad de Medida</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Unidad de Medida">
                                </div>

                                <div class="row alig-item-center align-items-center justify-content-center pt-4">
                                    <div class="col-3 pt-2">
                                        <label for="exampleFormControlInput1" class="form-label fw-bold">Precio Base</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Precio Base">
                                    </div>

                                    <div class="col-3 pt-2">
                                        <label for="exampleFormControlInput1" class="form-label fw-bold">Inpuesto</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Inpuesto">
                                    </div>

                                    <div class="col-3 pt-2">
                                        <label for="exampleFormControlInput1" class="form-label fw-bold">Precio Total</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Precio Total">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- FIN DEL FORMULARIO -->
                    <div class="modal-footer container-fluid border-top position-absolute bottom-0 start-0 end-0 p-2 d-flex gap-3">
                        <button type="button" class="btn bg-white border border-secondary flex-grow-1" data-bs-dismiss="modal"><a href="modules\ProductServices\Views\View_AddProductServices.php"><i class="bi bi-box-arrow-up-left"></i> Ir al formulario avanzado</a></button>
                        <button type="submit" class="btn btn-secondary flex-grow-1">Crear Producto</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>