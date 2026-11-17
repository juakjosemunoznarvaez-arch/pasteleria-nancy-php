<?php

require_once __DIR__ . "/../modelos/producto.php";

$producto = new Producto();

// REGISTRAR PRODUCTO
if (isset($_POST['registrar'])) {

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    if ($producto->registrar($nombre, $descripcion, $precio, $stock)) {
        header("Location: ../vistas/productos.php?mensaje=registrado");
        exit();
    } else {
        echo "Error al registrar el producto";
    }
}

// ACTUALIZAR PRODUCTO
if (isset($_POST['actualizar'])) {

    $id = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    if ($producto->actualizar($id, $nombre, $descripcion, $precio, $stock)) {
        header("Location: ../vistas/productos.php?mensaje=actualizado");
        exit();
    } else {
        echo "Error al actualizar el producto";
    }
}

// ELIMINAR PRODUCTO
if (isset($_GET['eliminar'])) {

    $id = $_GET['eliminar'];

    if ($producto->eliminar($id)) {
        header("Location: ../vistas/productos.php?mensaje=eliminado");
        exit();
    } else {
        echo "Error al eliminar el producto";
    }
}

?>