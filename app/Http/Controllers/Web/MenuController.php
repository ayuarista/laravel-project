<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use function Pest\Laravel\json;
use App\Models\Additional;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::query()->get();

        return view('menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $additionals = Additional::query()->get();
        return view('menu.create', compact('additionals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required', 'string'],
            'price' => ['required', 'min:10', 'integer'],
            'additional' => ['array'],
            'additional.*' => ['exists:additionals,id'],
        ]);

        $menu = new Menu($validate);

        $menu->save();

        if (isset($validate['additional'])) {
            $menu->additional()->sync($validate['additional']);
        }

        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $menu = Menu::query()->findOrFail($id);

        $menu->load(['additional:id,name,description', 'additional.variants']);

        return view('menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = Menu::query()->findOrFail($id);
        $menu->load(['additional', 'additional.variants']);
        $additional = Additional::query()->get();

        return view('menu.edit', compact(['menu', 'additional']));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $validate = $request->validate([
            'name' => ['string'],
            'price' => ['integer', 'min:10'],
            'additional' => ['array'],
            'additional.*' => ['exists:additionals,id'],
        ]);

        $menu = Menu::query()->findOrFail($id);

        $menu->update([
            'name' => $validate['name'] ?? $menu->name,
            'price' => $validate['price'] ?? $menu->price,
        ]);

        if (isset($validate['additional'])) {
            $currentAdditional = $menu->additional()->pluck('additionals.id')->toArray();

            $newAdditional = $validate['additional'];

            $removedAdditional = array_diff($currentAdditional, $newAdditional);

            if (!empty($removedAdditional)) {
                $menu->additional()->detach($removedAdditional);
            }

            $menu->additional()->sync($newAdditional);
        }

        return redirect()->route('menu.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::query()->findOrFail($id);

        $menu->delete();

        $menu->additional()->detach();

        return redirect()->route('menu.index');
    }
}
