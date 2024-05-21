<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('about.index')->with('abouts', $about);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.create')->with([
            'abouts' => About::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->file('photo')->getClientOriginalName();

        $destinationPath = public_path('post_photo');
        $request->file('photo')->move($destinationPath, $name);

        $path = 'post_photo/' . $name;

        About::create([
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'sciences_uz' => $request->sciences_uz,
            'sciences_ru' => $request->sciences_ru,
            'sciences_en' => $request->sciences_en,
            'language_uz' => $request->language_uz,
            'language_ru' => $request->language_ru,
            'language_en' => $request->language_en,
            'big_language_uz' => $request->big_language_uz,
            'big_language_ru' => $request->big_language_ru,
            'big_language_en' => $request->big_language_en,
            'photo' => $path ?? null
        ]);

        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('about.show')->with([
            'abouts' => $about,
        ]);
    }

    public function edit(About $about)
    {
        return view('about.edit')->with(['abouts' => $about]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($about->photo))
            {
                Storage::delete($about->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();

            $destinationPath = public_path('post_photo');
            $request->file('photo')->move($destinationPath, $name);

            $path = 'post_photo/' . $name;
        }

        $about->update([
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'sciences_uz' => $request->sciences_uz,
            'sciences_ru' => $request->sciences_ru,
            'sciences_en' => $request->sciences_en,
            'language_uz' => $request->language_uz,
            'language_ru' => $request->language_ru,
            'language_en' => $request->language_en,
            'big_language_uz' => $request->big_language_uz,
            'big_language_ru' => $request->big_language_ru,
            'big_language_en' => $request->big_language_en,
            'photo' => $path ?? $about->photo,
        ]);

        return redirect()->route('about.index', ['abouts' => $about->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index');
    }
}
