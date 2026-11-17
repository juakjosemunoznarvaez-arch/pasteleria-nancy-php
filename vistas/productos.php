<?php

require_once __DIR__ . "/../modelos/producto.php";

$producto = new Producto();
$productos = $producto->listar();

$mensaje = $_GET['mensaje'] ?? '';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Productos - Pasteleria Nancy</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #eee1f5;
            margin: 0;
            padding: 30px;
            color: #57285f;
        }

        .contenedor {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.10);
        }

        h1 {
            text-align: center;
            color: #a34c91;
        }

        h2 {
            color: #8e5ab7;
            border-bottom: 2px solid #eee1f5;
            padding-bottom: 10px;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid #d6b8e5;
            border-radius: 6px;
        }

        button {
            background: #a34c91;
            color: white;
            border: none;
            padding: 12px 20px;
            margin-top: 18px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #8e5ab7;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background: #a34c91;
            color: white;
        }

        tr:nth-child(even) {
            background: #f8f1fb;
        }

        .mensaje {
            background: #e5f5e8;
            padding: 12px;
            border-radius: 6px;
            margin: 15px 0;
        }

        .editar {
            color: #8050a5;
            font-weight: bold;
        }

        .eliminar {
            color: #c62828;
            font-weight: bold;
        }

    </style>

</head>

<body>

<div class="contenedor">

    <h1>Pasteleria Nancy</h1>

    <h2>Gestion de productos</h2>

    <?php if ($mensaje != ''): ?>

        <div class="mensaje">
            Operacion realizada:
            <?= htmlspecialchars($mensaje) ?>
        </div>

    <?php endif; ?>

    <h2>Registrar nuevo producto</h2>

    <form action="../controladores/productocontrolador.php"
          method="POST">

        <label>Nombre del producto</label>

        <input
            type="text"
            name="nombre"
            placeholder="Ejemplo: Pastel de fresa"
            required
        >

        <label>Descripcion</label>

        <textarea
            name="descripcion"
            placeholder="Descripcion del pastel"
            required
        ></textarea>

        <label>Precio</label>

        <input
            type="number"
            name="precio"
            min="0.01"
            step="0.01"
            required
        >

        <label>Stock disponible</label>

        <input
            type="number"
            name="stock"
            min="0"
            required
        >

        <button type="submit" name="registrar">
            Registrar producto
        </button>

    </form>

    <h2>Productos registrados</h2>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

        <?php if ($productos && $productos->num_rows > 0): ?>

            <?php while ($fila = $productos->fetch_assoc()): ?>

                <tr>

                    <td>
                        <?= $fila['id_producto'] ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($fila['nombre']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($fila['descripcion']) ?>
                    </td>

                    <td>
                        $<?= number_format($fila['precio'], 0, ',', '.') ?>
                    </td>

                    <td>
                        <?= $fila['stock'] ?>
                    </td>

                    <td>

                        <a class="editar"
                           href="editar_producto.php?id=<?= $fila['id_producto'] ?>">
                            Editar
                        </a>

                        |

                        <a class="eliminar"
                           href="../controladores/productocontrolador.php?eliminar=<?= $fila['id_producto'] ?>"
                           onclick="return confirm('¿Esta seguro de eliminar este producto?')">
                            Eliminar
                        </a>

                    </td>

                </tr>

            <?php endwhile; ?>

        <?php else: ?>

            <tr>
                <td colspan="6">
                    No hay productos registrados.
                </td>
            </tr>

        <?php endif; ?>

        </tbody>

    </table>

</div>

</body>
</html>
