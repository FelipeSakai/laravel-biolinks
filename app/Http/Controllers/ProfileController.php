<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        return view('profile', [
            'user' => auth()->user()
        ]);
    }

    public function update(ProfileRequest $request)
    {
        /**@var User $user */

        $user = auth()->user();

        $user->fill($request->validated())
            ->save();

        return back()
            ->with('message', 'Perfil atualizado com sucesso!');
    }
}
