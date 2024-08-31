<h1>Iniciar Sesión</h1>

<form action="{{ route('login') }}" method="POST">
    @csrf
    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Iniciar Sesión</button>
</form>
