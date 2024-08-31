<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Producto</title>
</head>
<body>
    <h1>Crear Nuevo Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label for="codigoProducto">Código del Producto:</label>
        <input type="text" id="codigoProducto" name="codigoProducto">

        <label for="nombreProducto">Nombre del Producto:</label>
        <input type="text" id="nombreProducto" name="nombreProducto">

        <label for="descripcionProducto">Descripción:</label>
        <input type="text" id="descripcionProducto" name="descripcionProducto">

        <label for="fechaVencProducto">Fecha de Vencimiento:</label>
        <input type="date" id="fechaVencProducto" name="fechaVencProducto">

        <button type="submit">Guardar Producto</button>
    </form>
</body>
</html>