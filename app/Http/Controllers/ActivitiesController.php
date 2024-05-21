<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activities::all();
        return view('activities.index')->with('activities', $activities);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create')->with([
            'activities' => Activities::all(),
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

        Activities::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'photo' => $path ?? null,
        ]);

        return redirect()->route('activities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Activities $activity)
    {
        return view('activities.show')->with([
            'activity' => $activity,
        ]);
    }

    public function edit(Activities $activity)
    {
        return view('activities.edit')->with(['activity' => $activity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activities $activity)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($activity->photo))
            {
                Storage::delete($activity->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();

            $destinationPath = public_path('post_photo');
            $request->file('photo')->move($destinationPath, $name);

            $path = 'post_photo/' . $name;
        }

        $activity->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'photo' => $path ?? $activity->photo,
        ]);

        return redirect()->route('activities.index', ['activity' => $activity->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activities $activity)
    {
        $activity->delete();
        return redirect()->route('activities.index');
    }
}
