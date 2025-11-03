<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /** @var  $user */

        $user = auth()->user();


        dd(
            $user->links(),
            $user->links()->create()
                ->where('name', '=', 'titulo')
                ->get()
        );

        return view('dashboard');
    }
}
