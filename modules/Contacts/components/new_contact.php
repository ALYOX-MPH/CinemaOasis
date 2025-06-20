<button type="button" class=" mx-2 btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    + Nuevo contacto
</button>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" action="/Contacts/Created_Simple_Contact" method="post">
            <!-- Form Title -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Nuevo contacto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="row g-4">

                    <!-- Type Client or Proveedor -->
                    <div class="btn-group col-md-12" role="group" aria-label="Basic radio toggle button group">
                        <!-- Cliente -->
                        <input type="radio" class="btn-check" name="Type" id="btnradio1" value="Cliente" autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="btnradio1">Cliente</label>

                        <!-- Proovedor -->
                        <input type="radio" class="btn-check" name="Type" id="btnradio2" autocomplete="off" value="Proveedor">
                        <label class="btn btn-outline-primary" for="btnradio2">Prooveedor</label>
                    </div>

                    <!-- Tipo de identificacion -->
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Tipo de identificacion</label>
                        <select id="inputState" class="form-select">
                            <option selected>Cedula</option>
                            <option>Pasaporte</option>
                        </select>
                    </div>

                    <!-- numero de identificacioj input 2 -->
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Numero</label>
                        <input type="number" class="form-control" name="Persona_Identification_Number">
                    </div>

                    <!--NAme  -->
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Nombre</label>
                        <input type="text" class="form-control" require name="Name">
                    </div>

                    <!-- NickName -->
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="NickName">
                    </div>

                    <!-- Municipio/provincia input 3 -->
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Municipio o provincia</label>
                        <input type="text" class="form-control" name="Province">
                    </div>

                    <!-- Direccion input 3 -->
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="inputPassword4" name="Address">
                    </div>

                    <!-- Email input 4 -->
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="inputEmail4" name="Email">
                    </div>

                    <!-- Phone inpput -->
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="inputPassword4" name="Phone">
                    </div>
                </div>
            </div>

            <!-- Footer Buttons -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light border border-1 rounded" data-bs-dismiss="modal"><a href="modules/Contacts/views/View_Contacts_AdvanceForm.php">Ir a formulario avanzado</a></button>
                <button type="submit" class="btn btn-success">Crear contacto</button>
            </div>
        </form>
    </div>
</div>