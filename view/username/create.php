<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="row">
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Id_Proveedor</label>
        <input type="number" min="1" name="id_proveedor" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Id_Producto</label>
        <input type="number" min="1" name="id_producto" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Id_Pintura</label>
        <input type="number" min="1" name="id_pintura" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Id_Empleado</label>
        <input type="number" min="1" name="id_empleado" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    </div>

    <div class="row">
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre_Proveedor</label>
        <input type="text" name="nombre_proveedor" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Fecha_Llegada</label>
        <input type="date" name="fecha_llegada" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Cantidad</label>
        <input type="number" min="1" name="cantidad" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Existencias</label>
        <input type="number" min="0" name="existencias" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>