<h1>Lista de Productos</h1>

<a href="{{ route('productos.create') }}">Crear Nuevo Producto</a>

<ul>
    @foreach($productos as $producto)
        <li>{{ $producto->nombreProducto }}
            - <a href="{{ route('productos.show', $producto->idProducto) }}">Ver</a>
            - <a href="{{ route('productos.edit', $producto->idProducto) }}">Editar</a></li>
    @endforeach
</ul>
