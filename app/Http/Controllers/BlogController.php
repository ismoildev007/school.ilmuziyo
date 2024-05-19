<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::all();
        return view('blog.index')->with('blogs', $blog);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create')->with([
            'blogs' => Blog::all(),
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

        Blog::create([
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'photo' => $path ?? null,
        ]);

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog.show')->with([
            'blogs' => $blog,
        ]);
    }

    public function edit(Blog $blog)
    {
        return view('blog.edit')->with(['blogs' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
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

        $blog->update([
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'photo' => $path ?? $blog->photo,
        ]);

        return redirect()->route('blog.index', ['blogs' => $blog->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
