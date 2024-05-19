<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $price = Price::all();
        return view('price.index')->with('prices', $price);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('price.create')->with([
            'prices' => Price::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Price::create([
            'inf_price' => $request->inf_price,
            'all_price' => $request->all_price,
            'kitchen_price_one' => $request->kitchen_price_one,
            'kitchen_price_three' => $request->kitchen_price_three,
        ]);

        return redirect()->route('price.index');
    }

    /**
     * Display the specified resource.
     */

    public function edit(Price $price)
    {
        return view('price.edit')->with(['prices' => $price]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Price $price)
    {
        $price->update([
            'inf_price' => $request->inf_price,
            'all_price' => $request->all_price,
            'kitchen_price_one' => $request->kitchen_price_one,
            'kitchen_price_three' => $request->kitchen_price_three,
        ]);

        return redirect()->route('price.index', ['prices' => $price->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {
        $price->delete();
        return redirect()->route('price.index');
    }
}
