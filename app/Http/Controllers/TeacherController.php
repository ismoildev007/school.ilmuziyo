<?php

namespace App\Http\Controllers;

use App\Models\Special;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Teacher::all();
        return view('teacher.index')->with('teachers', $teacher);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create')->with([
            'teachers' => Teacher::all(),
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

        Teacher::create([
            'title_uz' => $request->title_uz,
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

    public function edit(Teacher $teacher)
    {
        return view('teacher.edit')->with(['teachers' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($teacher->photo))
            {
                Storage::delete($teacher->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();

            $destinationPath = public_path('post_photo');
            $request->file('photo')->move($destinationPath, $name);

            $path = 'post_photo/' . $name;
        }

        $teacher->update([
            'title_uz' => $request->title_uz,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'photo' => $path ?? $teacher->photo,
        ]);

        return redirect()->route('teacher.index', ['teachers' => $teacher->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}
