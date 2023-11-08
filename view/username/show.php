<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $date = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[8]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?= $date[8]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">ID_Proveedor</th>
            <th scope="col">ID_Producto</th>
            <th scope="col">ID_Pintura</th>
            <th scope="col">ID_Empleado</th>
            <th scope="col">Nombre_Proveedor</th>
            <th scope="col">Fecha_Llegada</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Existencias</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id_proveedor"]?></td>
            <td scope="col"><?= $date["id_producto"]?></td>
            <td scope="col"><?= $date["id_pintura"]?></td>
            <td scope="col"><?= $date["id_empleado"]?></td>
            <td scope="col"><?= $date["nombre_proveedor"]?></td>
            <td scope="col"><?= $date["fecha_llegada"]?></td>
            <td scope="col"><?= $date["cantidad"]?></td>
            <td scope="col"><?= $date["existencias"]?></td>
        </tr>
    </tbody>
</table>



<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>