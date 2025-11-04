<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /** @var  $user */

        $user = auth()->user();

        return view('dashboard', [
            'links' => $user->links,
        ]);
    }
}
