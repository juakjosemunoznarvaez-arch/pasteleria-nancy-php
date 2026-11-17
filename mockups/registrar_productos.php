<?php
require_once __DIR__ . "/../modelos/producto.php";
$producto = new Producto();
$productos = $producto->listar();
$mensaje = $_GET['mensaje'] ?? '';
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Registrar productos - Pastelería Nancy</title>
<style>
*{box-sizing:border-box}body{font-family:Arial,sans-serif;background:#eee1f5;color:#57285f;margin:0;padding:28px}
.contenedor{background:#fff;max-width:1000px;margin:20px auto;padding:30px;border-radius:14px;box-shadow:0 4px 14px #0001}
h1,h2{color:#9e4e96}h1{text-align:center}
a{color:#8e5ab7}.volver{display:inline-block;margin-bottom:12px}
label{display:block;margin-top:14px;font-weight:bold}input,textarea{width:100%;padding:11px;border:1px solid #d9b6e8;border-radius:6px;margin-top:5px}
button,.boton{display:inline-block;background:#9e4e96;color:white;border:0;padding:11px 18px;border-radius:6px;text-decoration:none;margin-top:16px;cursor:pointer}
button:hover,.boton:hover{background:#824080}.secundario{background:#ddd;color:#57285f}
table{width:100%;border-collapse:collapse;margin-top:20px}th{background:#9e4e96;color:white}th,td{border:1px solid #ddd;padding:10px;text-align:center}tr:nth-child(even){background:#faf5fc}
.mensaje{padding:12px;background:#e7f5e9;border-radius:6px;margin:15px 0}
.acciones{display:flex;gap:10px;flex-wrap:wrap}
</style>
</head><body><main class="contenedor">
<a class="volver" href="inicio.php">← Volver al inicio</a><h1>Pastelería Nancy</h1><h2>Registrar nuevo producto</h2>
<?php if($mensaje === 'registrado'): ?><div class="mensaje">¡Producto registrado correctamente!</div><?php endif; ?>
<form action="../controladores/productocontrolador.php" method="POST">
<label>Nombre del producto</label><input type="text" name="nombre" required maxlength="100" placeholder="Ejemplo: Pastel de fresa">
<label>Descripción</label><textarea name="descripcion" required placeholder="Descripción del producto"></textarea>
<label>Precio</label><input type="number" name="precio" min="0.01" step="0.01" required>
<label>Stock disponible</label><input type="number" name="stock" min="0" step="1" required>
<button type="submit" name="registrar">Registrar producto</button>
</form>
<h2>Productos registrados</h2><table><tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Stock</th></tr>
<?php if($productos && $productos->num_rows): while($fila=$productos->fetch_assoc()): ?>
<tr><td><?= (int)$fila['id_producto'] ?></td><td><?= htmlspecialchars($fila['nombre']) ?></td><td><?= htmlspecialchars($fila['descripcion']) ?></td><td>$<?= number_format((float)$fila['precio'],0,',','.') ?></td><td><?= (int)$fila['stock'] ?></td></tr>
<?php endwhile; else: ?><tr><td colspan="5">No hay productos registrados.</td></tr><?php endif; ?></table>
</main></body></html>