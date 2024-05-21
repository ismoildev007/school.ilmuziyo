<?php

namespace App\Http\Controllers;

use App\Models\Special;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $special = Special::all();
        return view('special.index')->with('specials', $special);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('special.create')->with([
            'specials' => Special::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo'))
        {
            $name = $request->file('photo')->getClientOriginalName();

            $destinationPath = public_path('post_photo');
            $request->file('photo')->move($destinationPath, $name);

            $path = 'post_photo/' . $name;
        }

        Special::create([
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'photo' => $path ?? null,
        ]);

        return redirect()->route('special.index');
    }

    /**
     * Display the specified resource.
     */

    public function edit(Special $special)
    {
        return view('special.edit')->with(['specials' => $special]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Special $special)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($special->photo))
            {
                Storage::delete($special->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();

            $destinationPath = public_path('post_photo');
            $request->file('photo')->move($destinationPath, $name);

            $path = 'post_photo/' . $name;
        }

        $special->update([
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'photo' => $path ?? $special->photo,
        ]);

        return redirect()->route('special.index', ['specials' => $special->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Special $special)
    {
        $special->delete();
        return redirect()->route('special.index');
    }
}
