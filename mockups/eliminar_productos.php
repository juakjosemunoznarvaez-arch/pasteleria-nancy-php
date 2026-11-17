
<?php
$id = 1;
$nombre = "Pastel de fresa";
$precio = 76000;
$stock = 10;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar producto - Pasteleria Nancy</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eee1f5;
            color: #57285f;
            padding: 30px;
        }

        .contenedor {
            background: white;
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
        }

        h1, h2 {
            color: #9e4e96;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background: #9e4e96;
            color: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        .confirmacion {
            background: #f7effa;
            padding: 25px;
            margin-top: 25px;
            text-align: center;
            border-radius: 10px;
        }

        button, a {
            display: inline-block;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            margin: 10px 5px;
            cursor: pointer;
        }

        .eliminar {
            background: #d94f9d;
            color: white;
        }

        .cancelar {
            background: #ddd;
            color: #57285f;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Pasteleria Nancy</h1>

    <h2>Gestion de productos</h2>

    <h2>Productos registrados</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>

        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $nombre; ?></td>
            <td>$76.000</td>
            <td><?php echo $stock; ?></td>
            <td>Editar | Eliminar</td>
        </tr>
    </table>

    <div class="confirmacion">

        <h2>Confirmar eliminacion</h2>

        <p>
            ¿Esta seguro de que desea eliminar este producto?
        </p>

        <h3><?php echo $nombre; ?></h3>

        <button type="button" class="cancelar">
            Cancelar
        </button>

        <button type="button" class="eliminar">
            Eliminar producto
        </button>

    </div>

    <p>
        <a href="inicio.php">Volver al inicio</a>
    </p>

</div>

</body>
</html>
