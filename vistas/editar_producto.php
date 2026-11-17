<?php

require_once __DIR__ . "/../modelos/producto.php";

$producto = new Producto();

if (!isset($_GET['id'])) {
    die("No se recibio el ID del producto");
}

$id = intval($_GET['id']);

$datos = $producto->buscarPorId($id);

if (!$datos) {
    die("Producto no encontrado");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar producto - Pasteleria Nancy</title>

    <style>
        body {
            font-family: Arial;
            background: #eee1f5;
            padding: 30px;
            color: #57285f;
        }

        .contenedor {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
        }

        h1 {
            text-align: center;
            color: #a34c91;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            box-sizing: border-box;
            border: 1px solid #d6b8e5;
            border-radius: 6px;
        }

        button {
            background: #a34c91;
            color: white;
            border: none;
            padding: 12px 20px;
            margin-top: 20px;
            border-radius: 6px;
            cursor: pointer;
        }

        a {
            color: #8e5ab7;
            margin-left: 15px;
        }
    </style>

</head>

<body>

<div class="contenedor">

    <h1>Pasteleria Nancy</h1>

    <h2>Editar producto</h2>

    <form action="../controladores/productocontrolador.php"
          method="POST">

        <input
            type="hidden"
            name="id_producto"
            value="<?= $datos['id_producto'] ?>"
        >

        <label>Nombre del producto</label>

        <input
            type="text"
            name="nombre"
            value="<?= htmlspecialchars($datos['nombre']) ?>"
            required
        >

        <label>Descripcion</label>

        <textarea
            name="descripcion"
            required
        ><?= htmlspecialchars($datos['descripcion']) ?></textarea>

        <label>Precio</label>

        <input
            type="number"
            name="precio"
            step="0.01"
            min="0.01"
            value="<?= $datos['precio'] ?>"
            required
        >

        <label>Stock disponible</label>

        <input
            type="number"
            name="stock"
            min="0"
            value="<?= $datos['stock'] ?>"
            required
        >

        <button type="submit" name="actualizar">
            Guardar cambios
        </button>

        <a href="productos.php">Cancelar</a>

    </form>

</div>

</body>
</html>