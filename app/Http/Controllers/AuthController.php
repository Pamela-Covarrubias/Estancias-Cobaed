<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        
        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            
            Auth::login($user);
            return redirect()->route('welcome'); 
        }

        throw ValidationException::withMessages([
            'login' => 'Usuario inválido o contraseña incorrecta.', // Mensaje de error
        ]);
    }
}

// --------------------------------------------------------------------------------------

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class AuthController extends Controller
// {
//     public function login(Request $request)
//     {
//         $credentials = $request->only('username', 'password');

//         // Ejemplo: Validar las credenciales directamente
//         if ($credentials['username'] === 'admin' && $credentials['password'] === '1234') {
//             return redirect()->route('welcome');
//         }

//         // Si las credenciales no coinciden
//         return back()->withErrors(['login_error' => 'Usuario o contraseña incorrectos.']);
//     }
// }