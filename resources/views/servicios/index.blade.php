<h1>Lista de Servicios</h1>

<a href="{{ route('servicios.create') }}">Crear Nuevo Servicio</a>

<ul>
    @foreach($servicios as $servicio)
        <li>
            {{ $servicio->nombreSer }} 
            - <a href="{{ route('servicios.show', $servicio->idServicio) }}">Ver</a> 
            - <a href="{{ route('servicios.edit', $servicio->idServicio) }}">Editar</a> 
            - <form action="{{ route('servicios.destroy', $servicio->idServicio) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este servicio?');">Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>
