<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;

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

    public function verify(LoginRequest $request)
    {
        $user = Usuario::VerifyUser($request);

        if ($user) {
            session([
                'user_id' => $user->id,
                'real_name' => $user->nombre,
                'public_name' => $user->nombre_usuario,
                'user_role' => $user->rol_id
            ]);

            return redirect()->route('index');
        }
        return back()->withErrors(['login' => "Correo o contraseña incorrectas"]);
    }


    public function register(RegisterRequest $request)
    { 
       
        Usuario::create([
            'nombre' => $request->nombre,
            'nombre_usuario' => $request->nombre_usuario,
            'correo' => $request->correo,
            'contrasenia' => bcrypt($request->contrasenia),
            'estado' => 'Activo',
            'correo_verificar' => false,
            'rol_id' => 3
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
