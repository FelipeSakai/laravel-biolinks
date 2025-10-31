<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function __invoke(): \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
    {
        auth()->logout();
        session()->invalidate();

        return redirect('login');
    }
}
