<table class="table table-bordered align-middle ">
    <thead class="table-light">
        <tr>
            <th scope="col" class="p-3 border-end border-start" style="background-color: #f5f5fb;"><input class="form-check-input me-2" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">Descripcion del servicio</th>
            <th scope="col" class="p-3 border-end" style="background-color: #f5f5fb;">Departamento</th>
            <th scope="col" class="p-3 border-end" style="background-color: #f5f5fb;">Precio Base</th>
            <th scope="col" class="p-3 border-end" style="background-color: #f5f5fb;">Impuesto</th>
            <th scope="col" class="p-3 border-end" style="background-color: #f5f5fb;">Precio Total</th>
            <th scope="col" class="p-3  border-start" style="background-color: #f5f5fb;">Acciones</th>
        </tr>
    </thead>

    <?php if (count($Services) == 0) : ?>
        <!-- MENSAJE CREA TU SERVICIO EN CASO DE QUE NO EXISTAN -->
        <tr>
            <td colspan="5" class="p-5">
                <div class="d-flex flex-column align-items-center justify-content-center text-center" style="height: 300px;">
                    <i class="bi bi-box-seam" style="font-size: 2em;"></i>
                    <h3 class="mt-3">¡A un clic de tu primer producto!</h3>
                    <p>Crea tus productos y empieza a registrar tus ventas</p>
                    <button type="button" class="btn btn-secondary btn-lg mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="bi bi-plus"></i> Crear Producto/Servicio
                    </button>
                </div>
            </td>
        </tr>


        <!-- EN CASO DE QUE EXISTAN SERVICIOS -->
    <?php else : ?>
        <tbody>
            <?php foreach ($Services ?? [] as $Service) : ?>
                <tr>
                    <td> <?= $Service["ServiceDescription"] ?> </td>
                    <td> <?= $Service["Department"] ?> </td>
                    <td> <?= $Service["BasePrice"] ?> </td>
                    <td> <?= $Service["Impuesto"] ?> </td>
                    <td> <?= $Service["TotalPrice"] ?> </td>
                    <td>
                        <i class="bi bi-pencil me-2"></i>
                        <i class="bi bi-three-dots-vertical"></i>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    <?php endif ?>



</table>

<!-- NEXT PAGE (Pagination) -->
<div class="container-fluid border-top position-absolute bottom-0 start-0 end-0 p-2 ">
    <nav aria-label="Page navigation example ">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item "><a class="page-link text-secondary" href="">1</a></li>
            <li class="page-item"><a class="page-link text-secondary" href="#">2</a></li>
            <li class="page-item"><a class="page-link text-secondary" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link text-secondary" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>