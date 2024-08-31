<h1>Editar Producto</h1>

<form action="{{ route('productos.update', $producto->idProducto) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="codigoProducto">Código del Producto:</label>
    <input type="text" id="codigoProducto" name="codigoProducto" value="{{ $producto->codigoProducto }}">

    <label for="nombreProducto">Nombre del Producto:</label>
    <input type="text" id="nombreProducto" name="nombreProducto" value="{{ $producto->nombreProducto }}">

    <label for="descripcionProducto">Descripción:</label>
    <input type="text" id="descripcionProducto" name="descripcionProducto" value="{{ $producto->descripcionProducto }}">

    <label for="fechaVencProducto">Fecha de Vencimiento:</label>
    <input type="date" id="fechaVencProducto" name="fechaVencProducto" value="{{ $producto->fechaVencProducto }}">

    <button type="submit">Actualizar Producto</button>
</form>
