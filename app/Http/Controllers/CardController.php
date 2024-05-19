<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $card = Card::all();
        return view('card.index')->with('cards', $card);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('card.create')->with([
            'cards' => Card::all(),
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

        Card::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'photo' => $path ?? null,
        ]);

        return redirect()->route('card.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        return view('card.show')->with([
            'cards' => $card,
        ]);
    }

    public function edit(Card $card)
    {
        return view('card.edit')->with(['cards' => $card]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
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

        $card->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'photo' => $path ?? $card->photo,
        ]);

        return redirect()->route('card.index', ['cards' => $card->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        $card->delete();
        return redirect()->route('card.index');
    }
}
