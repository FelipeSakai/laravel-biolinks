<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        if ($request->tryToRegister()) {
            return redirect('dashboard');
        }
        return back()->with(['messagem'=>'Cadastro não realizado']);
    }
}
