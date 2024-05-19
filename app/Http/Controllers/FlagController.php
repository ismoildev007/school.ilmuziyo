<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Blog;
use App\Models\Flag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FlagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flag = Flag::all();
        return view('flag.index')->with('flags', $flag);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flag.create')->with([
            'flags' => Flag::all(),
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
            $path = $request->file('photo')->storeAs('post_photo', $name);

        }

        Flag::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'photo' => $path ?? null,
        ]);

        return redirect()->route('flag.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flag $flag)
    {
        return view('flag.show')->with([
            'flags' => $flag,
        ]);
    }

    public function edit(Flag $flag)
    {
        return view('flag.edit')->with(['flags' => $flag]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flag $flag)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($educational->photo))
            {
                Storage::delete($educational->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }

        $flag->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'photo' => $path ?? $flag->photo,
        ]);

        return redirect()->route('flag.index', ['flags' => $flag->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flag $flag)
    {
        $flag->delete();
        return redirect()->route('flag.index');
    }
}
