<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Additional;
use App\Models\Variant;
use Illuminate\Http\Request;

class AdditionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $additionals = Additional::query()->get();

        return view('additional.index', compact('additionals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $variants = Variant::query()->get();

        return view('additional.create', compact('variants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => ['required', 'string'],
            "description" => ['required', 'string'],
            'variants' => ['array'],
            'variants.*' => ['exists:variants,id'],
        ]);

        $additional = new Additional($validate);

        $additional->save();

        if (isset($validate['variants'])) {
            $additional->variants()->sync($validate['variants']);
        }

        return redirect()->route('additional.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $additional = Additional::query()->findOrFail($id);

        $additional->load('variants:id,name');

        return view('additional.show', compact('additional'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $additional = Additional::query()->findOrFail($id);
        $variants = Variant::query()->get();

        return view('additional.edit', compact('additional', 'variants'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            "name" => ['string'],
            "description" => ['string'],
            'variants' => ['array'],
            'variants.*' => ['exists:variants,id'],
        ]);

        $additional = Additional::query()->findOrFail($id);

        $additional->update([
            'name' => $validate['name'] ?? $additional->name,
            'description' => $validate['description'] ?? $additional->description,
        ]);

        if (isset($validate['variants'])) {
            $currentVariants = $additional->variants()->pluck('variants.id')->toArray();

            $newVariants = $validate['variants'];

            $removedVariants = array_diff($currentVariants, $newVariants);

            if (!empty($removedVariants)) {
                $additional->variants()->detach($removedVariants);
            }

            $additional->variants()->sync($newVariants);
        }

        return redirect()->route('additional.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $additional = Additional::query()->findOrFail($id);

        $additional->delete();

        $additional->variants()->detach();

        return redirect()->route('additional.index');
    }
}
