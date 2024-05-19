<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::all();
        return view('admin')->with('homes', $home);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.create')->with([
            'homes' => Home::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Home::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
        ]);

        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        return view('home.show')->with([
            'homes' => $home,
        ]);
    }

    public function edit(Home $home)
    {
        return view('home.edit')->with(['homes' => $home]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        $home->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
        ]);

        return redirect()->route('home.index', ['homes' => $home->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        $home->delete();
        return redirect()->route('home.index');
    }
}
