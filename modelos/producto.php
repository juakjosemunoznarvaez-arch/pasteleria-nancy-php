<?php

require_once __DIR__ . "/../config/conexion.php";

class Producto {

    private $conexion;

    
    public function __construct() {
        global $conexion;
        $this->conexion = $conexion;
    }

    // CONSULTAR TODOS LOS PRODUCTOS
    public function listar() {

        $sql = "SELECT * FROM productos ORDER BY id_producto DESC";

        return $this->conexion->query($sql);
    }

    // REGISTRAR PRODUCTO
    public function registrar($nombre, $descripcion, $precio, $stock) {

        $sql = "INSERT INTO productos
                (nombre, descripcion, precio, stock)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param(
            "ssdi",
            $nombre,
            $descripcion,
            $precio,
            $stock
        );

        return $stmt->execute();
    }

    //  ACTUALIZAR PRODUCTO 
    public function actualizar($id, $nombre, $descripcion, $precio, $stock) {

        $sql = "UPDATE productos
                SET nombre = ?,
                    descripcion = ?,
                    precio = ?,
                    stock = ?
                WHERE id_producto = ?";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param(
            "ssdii",
            $nombre,
            $descripcion,
            $precio,
            $stock,
            $id
        );

        return $stmt->execute();
    }

    //  ELIMINAR PRODUCTO
    public function eliminar($id) {

        $sql = "DELETE FROM productos
                WHERE id_producto = ?";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }

    // CONSULTAR UN PRODUCTO POR SU ID
    public function buscarPorId($id) {

        $sql = "SELECT * FROM productos
                WHERE id_producto = ?";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param("i", $id);

        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

}

?>
