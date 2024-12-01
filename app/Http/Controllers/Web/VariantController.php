<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $variants = Variant::query()->get();

        return view('variant.index', compact('variants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('variant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => ['required', 'string'],
        ]);

        $variant = new Variant($validate);

        $variant->save();

        return redirect()->route('variant.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $variant = Variant::query()->findOrFail($id);

        return view('variant.show', compact('variant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $variant = Variant::query()->findOrFail($id);

        return view('variant.edit', compact('variant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $variant = Variant::query()->findOrFail($id);

        $validate = $request->validate([
            "name" => ['required', 'string'],
        ]);

        $variant->update($validate);

        return redirect()->route('variant.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $variant = Variant::query()->findOrFail($id);

        $variant->delete();

        return redirect()->route('variant.index');
    }
}
