
<?php
// Datos de ejemplo para representar la pantalla
$id = 1;
$nombre = "Pastel de fresa";
$descripcion = "Pastel con fresas y crema";
$precio = 76000;
$stock = 10;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar producto - Pasteleria Nancy</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eee1f5;
            color: #57285f;
            padding: 30px;
        }

        .contenedor {
            background: white;
            max-width: 750px;
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

        button, .cancelar {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
        }

        button {
            background: #9e4e96;
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

    <h2>Editar producto</h2>

    <form>

        <label>ID del producto</label>
        <input type="number" value="<?php echo $id; ?>" readonly>

        <label>Nombre del producto</label>
        <input type="text" value="<?php echo htmlspecialchars($nombre); ?>">

        <label>Descripcion</label>
        <textarea><?php echo htmlspecialchars($descripcion); ?></textarea>

        <label>Precio</label>
        <input type="number" value="<?php echo $precio; ?>">

        <label>Stock disponible</label>
        <input type="number" value="<?php echo $stock; ?>">

        <button type="button">Actualizar producto</button>

        <a href="registrar_productos.php" class="cancelar">
            Cancelar
        </a>

    </form>

</div>

</body>
</html>
