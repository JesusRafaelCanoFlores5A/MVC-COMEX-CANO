<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id_proveedor,$id_producto,$id_pintura,$id_empleado,$nombre_proveedor,$fecha_llegada,$cantidad,$existencias){
            $stament = $this->PDO->prepare("INSERT INTO tbl_proveedor(`id_proveedor`,`id_producto`,`id_pintura`,`id_empleado`,`nombre_proveedor`,`fecha_llegada`,`cantidad`,`existencias`) VALUES(:id_proveedor,:id_producto,:id_pintura,:id_empleado,:nombre_proveedor,:fecha_llegada,:cantidad,:existencias);ALTER TABLE tbl_proveedor DROP COLUMN id;ALTER TABLE tbl_proveedor ADD COLUMN id int AUTO_INCREMENT PRIMARY KEY;");
            $stament->bindParam(":id_proveedor",$id_proveedor);
            $stament->bindParam(":id_producto",$id_producto);
            $stament->bindParam(":id_pintura",$id_pintura);
            $stament->bindParam(":id_empleado",$id_empleado);
            $stament->bindParam(":nombre_proveedor",$nombre_proveedor);
            $stament->bindParam(":fecha_llegada",$fecha_llegada);
            $stament->bindParam(":cantidad",$cantidad);
            $stament->bindParam(":existencias",$existencias);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_proveedor where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT `id`,`id_proveedor`,`id_producto`,`id_pintura`,`id_empleado`,`nombre_proveedor`,`fecha_llegada`,`cantidad`,`existencias` FROM tbl_proveedor");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$id_proveedor,$id_producto,$id_pintura,$id_empleado,$nombre_proveedor,$fecha_llegada,$cantidad,$existencias){
            $stament = $this->PDO->prepare("UPDATE tbl_proveedor SET id_proveedor = :id_proveedor , id_producto = :id_producto , id_pintura = :id_pintura , id_empleado = :id_empleado , nombre_proveedor = :nombre_proveedor , fecha_llegada = :fecha_llegada , cantidad = :cantidad , existencias = :existencias WHERE id = :id");
            $stament->bindParam(":id_proveedor",$id_proveedor);
            $stament->bindParam(":id_producto",$id_producto);
            $stament->bindParam(":id_pintura",$id_pintura);
            $stament->bindParam(":id_empleado",$id_empleado);
            $stament->bindParam(":nombre_proveedor",$nombre_proveedor);
            $stament->bindParam(":fecha_llegada",$fecha_llegada);
            $stament->bindParam(":cantidad",$cantidad);
            $stament->bindParam(":existencias",$existencias);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM tbl_proveedor WHERE id = :id;ALTER TABLE tbl_proveedor DROP COLUMN id;ALTER TABLE tbl_proveedor ADD COLUMN id int AUTO_INCREMENT PRIMARY KEY;");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>