<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;

class LinkController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
        /** @var User $user */

        $user = auth()->user();

        $user->links()
            ->create($request->validated());


        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        $link->update($request->validated());

        return redirect('dashboard')
            ->with('messagem', 'Link atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();
        return redirect('dashboard')
            ->with('messagem', 'Link deletado com sucesso!');

    }

    public function up(Link $link)
    {
        /** @var User $user */

        $user = auth()->user();


        $order = $link->sort;
        $newOrder = $order - 1;

        $swapWith = $user->links()
            ->where('sort', $newOrder)
            ->first();

        $link->fill(['sort' => $newOrder])->save();
        $swapWith->fill(['sort' => $order])->save();

        return back();
    }

    public function down(Link $link)
    {
        /** @var User $user */

        $user = auth()->user();


        $order = $link->sort;
        $newOrder = $order + 1;

        $swapWith = $user->links()
            ->where('sort', $newOrder)
            ->first();

        $link->fill(['sort' => $newOrder])->save();
        $swapWith->fill(['sort' => $order])->save();

        return back();
    }
}
