<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\Usuario;

class LoginController extends Controller
{
    protected $redirectTo = '/Inicio';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'correoPersona' => 'required|string|email|max:40',
            'passwordUsuario' => 'required|string',
        ]);


        $usuario = Usuario::whereHas('persona', function ($query) use ($request) {
            $query->where('correoPersona', $request->correoPersona);
        })->first();

        
        if ($usuario && Hash::check($request->passwordUsuario, $usuario->passwordUsuario)) {
            Auth::login($usuario);
            Log::info('Autenticación exitosa para el usuario: ' . $usuario->persona->correoPersona);

            return redirect()->intended($this->redirectTo);
        } else {
            Log::warning('Intento fallido para el correo: ' . $request->correoPersona);
            return redirect()->back()->withErrors(['correoPersona' => 'Las credenciales no coinciden con nuestros registros.']);
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
}
