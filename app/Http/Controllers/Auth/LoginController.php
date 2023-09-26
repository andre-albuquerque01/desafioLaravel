<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['entrar']]);
    // }

    public function create()
    {
        // return Inertia::render('Auth/Login');
        return redirect(route('dashboard'));
    }

    public function auth(Request $request)
    {
        $credenciais = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.email' => 'O email não é válido'
        ]);
        if (Auth::attempt($credenciais)) :
            $request->session()->regenerate();
            return redirect(route('dashboard'));
        else :
            return redirect(route('/'));
        endif;
    }
    
    public function destroy()
    {
        auth()->logout();
        return redirect(route('/'));
        // return response()->json(['message' => 'Successfully logged out']);
    }
}