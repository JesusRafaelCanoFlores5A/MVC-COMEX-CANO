<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class=" row col-3 mb-3 ">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[8]?>">
        </div>
    </div>


    <div class="row">
        <div class="col-3 mb-3">
            <label for="staticEmail" class="col-sm-2 col-form-label">Id_Proveedor</label>
            <div class="col-sm-10">
            <input min="1" type="number" name="id_proveedor"  class="form-control" id="staticEmail" value="<?= $user[0]?>">
            </div>
        </div>
        <div class="col-3 mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Id_Producto</label>
            <div class="col-sm-10">
                <input min="1"type="number" name="id_producto" class="form-control" id="inputPassword" value="<?= $user[1]?>">
            </div>
        </div>
        <div class="col-3 mb-3">
            <label for="staticEmail" class="col-sm-2 col-form-label">Id_Pintura</label>
            <div class="col-sm-10">
            <input min="1" type="number" name="id_pintura"  class="form-control" id="staticEmail" value="<?= $user[2]?>">
            </div>
        </div>
        <div class="col-3 mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Id_Empleado</label>
            <div class="col-sm-10">
                <input min="1" type="number" name="id_empleado" class="form-control" id="inputPassword" value="<?= $user[3]?>">
            </div>
        </div>
    <div>

    
    <div class="row">
        <div class="col-3 mb-3">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre_Proveedor</label>
            <div class="col-sm-10">
            <input type="text" name="nombre_proveedor"  class="form-control" id="staticEmail" value="<?= $user[4]?>">
            </div>
        </div>
        <div class="col-3 mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Fecha_Llegada</label>
            <div class="col-sm-10">
                <input type="date" name="fecha_llegada" class="form-control" id="inputPassword" value="<?= $user[5]?>">
            </div>
        </div>
        <div class="col-3 mb-3">
            <label for="staticEmail" class="col-sm-2 col-form-label">Cantidad</label>
            <div class="col-sm-10">
            <input min="1" type="number" name="cantidad"  class="form-control" id="staticEmail" value="<?= $user[6]?>">
            </div>
        </div>
        <div class="col-3 mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Existencias</label>
            <div class="col-sm-10">
                <input min="0" type="number" name="existencias" class="form-control" id="inputPassword" value="<?= $user[7]?>">
            </div>
        </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>