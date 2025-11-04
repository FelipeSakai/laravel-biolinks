<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /** @var  $user */

        $user = auth()->user();


        dump($user->links(),
            $user->links()
                ->get()
        );

        return view('dashboard');
    }
}
