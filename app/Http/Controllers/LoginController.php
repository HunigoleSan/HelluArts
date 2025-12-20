<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class LoginController extends Controller
{

    public function index()
    {

        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function verify(Request $request)
    {
        $dredenciales = $request->validate([
            'correo' => 'required|email',
            'contrasenia' => 'required'
        ], [
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'Por favor ingresa un correo válido.',
            'contrasenia.required' => 'La contraseña es obligatoria.',
        ]);

        $user = Usuario::VerifyUser($dredenciales);

        if ($user) {
            session([
                'user_id' => $user->id,
                'real_name' => $user->nombre,
                'public_name' => $user->nombre_usuario,
                'user_role' => $user->rol_id
            ]);

            return redirect()->route('artes');
        }
        return back()->withErrors(['login' => "Credenciales incorrectas"]);
    }


    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'nombre_usuario' => 'required|unique:usuarios,nombre_usuario',
            'correo' => 'required|email|unique:usuarios,correo',
            'contrasenia' => 'required|min:3'
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre_usuario.required' => 'El nombre de usuario es obligatorio.',
            'nombre_usuario.unique' => 'Este usuario ya está en uso.',
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'Por favor ingresa un correo válido.',
            'correo.unique' => 'Ese correo está en uso.',
            'contrasenia.required' => 'La contraseña es obligatoria.',
            'contrasenia.min' => 'La contraseña debe tener al menos 6 caracteres.',
        ]);

        Usuario::create([
            'nombre' => $request->nombre,
            'nombre_usuario' => $request->nombre_usuario,
            'correo' => $request->correo,
            'contrasenia' => bcrypt($request->contrasenia),
            'estado' => 'Activo',
            'correo_verificar' => false,
            'rol_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('login')->with('success','Ya puedes iniciar sesión');
    }

    /* 
    flush + invalidate + regenerateToken = Elimina la sesión y protege contra fuerza bruta y CSRF
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
