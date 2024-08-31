<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Usuario;
use App\Models\Persona;
use App\Models\TipoDocumento; // Asegúrate de agregar esta línea
use App\Models\Direccion; // Asegúrate de agregar esta línea si también usas Direccion
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/Inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        $tiposDocumentos = TipoDocumento::all(); // Asegúrate de que este modelo esté correctamente importado
        
        return view('auth.register', compact('tiposDocumentos'));
    }

    public function register(Request $request)
    {
        // Validar los datos
        $request->validate([
            'tipoViaPersona' => 'required|string|max:255',
            'numeroViaPersona' => 'required|integer',
            'nombreViaPersona' => 'required|string|max:20',
            'cuadrantePersona' => 'nullable|string|max:255',
            'numeroViaGeneradoraPersona' => 'nullable|integer',
            'prefijoCuadranteViaGeneradoraPersona' => 'nullable|string|max:10',
            'numeroPlacaPersona' => 'nullable|integer',
            'prefijoPersona' => 'nullable|string|max:255',
            // Validación de otros campos...
        ]);
    
        // Crear una nueva dirección
        $direccion = Direccion::create([
            'tipoViaPersona' => $request->tipoViaPersona,
            'numeroViaPersona' => $request->numeroViaPersona,
            'nombreViaPersona' => $request->nombreViaPersona,
            'cuadrantePersona' => $request->cuadrantePersona,
            'numeroViaGeneradoraPersona' => $request->numeroViaGeneradoraPersona,
            'prefijoCuadranteViaGeneradoraPersona' => $request->prefijoCuadranteViaGeneradoraPersona,
            'numeroPlacaPersona' => $request->numeroPlacaPersona,
            'prefijoPersona' => $request->prefijoPersona,
        ]);
    
        // Crear una nueva persona
        $persona = Persona::create([
            'primerNombrePersona' => $request->primerNombrePersona,
            'segundoNombrePersona' => $request->segundoNombrePersona,
            'primerApellidoPersona' => $request->primerApellidoPersona,
            'segundoApellidoPersona' => $request->segundoApellidoPersona,
            'tipoDocumento_idTipoDocumento' => $request->tipoDocumento_idTipoDocumento,
            'numeroDocumentoPersona' => $request->numeroDocumentoPersona,
            'celularPersona' => $request->celularPersona,
            'correoPersona' => $request->correoPersona,
            'direccion_idDireccion' => $direccion->idDireccion, // Relacionar con la dirección creada
        ]);
    
        // Crear un nuevo usuario
        $usuario = Usuario::create([
            'nombreUsuario' => $request->nombreUsuario,
            'passwordUsuario' => Hash::make($request->passwordUsuario),
            'persona_id' => $persona->idPersona,
        ]);
    
        // Autenticar y redirigir al usuario
        Auth::login($usuario);
    
        return redirect('/Inicio');
    }
}