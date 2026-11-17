
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar productos - Pasteleria Nancy</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eee1f5;
            color: #57285f;
            margin: 0;
            padding: 30px;
        }

        .contenedor {
            background: white;
            max-width: 850px;
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

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #d9b6e8;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            background: #9e4e96;
            color: white;
            border: none;
            padding: 12px 20px;
            margin-top: 20px;
            border-radius: 6px;
            cursor: pointer;
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

        a {
            color: #9e4e96;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Pasteleria Nancy</h1>

    <h2>Gestion de productos</h2>

    <h2>Registrar nuevo producto</h2>

    <form method="post">

        <label>Nombre del producto</label>
        <input type="text" name="nombre"
               placeholder="Ejemplo: Pastel de fresa">

        <label>Descripcion</label>
        <textarea name="descripcion"
                  placeholder="Descripcion del pastel"></textarea>

        <label>Precio</label>
        <input type="number" name="precio">

        <label>Stock disponible</label>
        <input type="number" name="stock">

        <button type="button">Registrar producto</button>

    </form>

    <h2>Productos registrados</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Pastel de fresa</td>
            <td>Pastel con fresas y crema</td>
            <td>$76.000</td>
            <td>10</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Pastel de chocolate</td>
            <td>Pastel de chocolate</td>
            <td>$87.000</td>
            <td>8</td>
        </tr>
    </table>

    <p><a href="inicio.php">Volver al inicio</a></p>

</div>

</body>
</html>
