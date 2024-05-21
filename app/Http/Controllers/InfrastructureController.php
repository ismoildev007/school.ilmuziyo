<?php

namespace App\Http\Controllers;


use App\Models\Infrastructure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfrastructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infrastructure = Infrastructure::all();
        return view('infrastructure.index')->with('infrastructures', $infrastructure);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('infrastructure.create')->with([
            'infrastructures' => Infrastructure::all(),
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

        Infrastructure::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'photo' => $path ?? null,
        ]);

        return redirect()->route('infrastructure.index');
    }

    /**
     * Display the specified resource.
     */

    public function edit(Infrastructure $infrastructure)
    {
        return view('infrastructure.edit')->with(['infrastructures' => $infrastructure]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Infrastructure $infrastructure)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($infrastructure->photo))
            {
                Storage::delete($infrastructure->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();

            $destinationPath = public_path('post_photo');
            $request->file('photo')->move($destinationPath, $name);

            $path = 'post_photo/' . $name;
        }

        $infrastructure->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'photo' => $path ?? $infrastructure->photo,
        ]);

        return redirect()->route('infrastructure.index', ['infrastructures' => $infrastructure->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Infrastructure $infrastructure)
    {
        $infrastructure->delete();
        return redirect()->route('infrastructure.index');
    }
}
