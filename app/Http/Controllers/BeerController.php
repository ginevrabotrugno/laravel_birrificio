<?php

namespace App\Http\Controllers;

use App\Functions\Helper;
use App\Http\Requests\BeerRequest;
use App\Models\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beers = Beer::all();
        return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BeerRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Helper::generateSlug($data['name'], Beer::class);

        // $new_beer = new Beer();
        // $new_beer->fill($data);
        // $new_beer->save();

        $new_beer = Beer::create($data);

        return redirect()->route('beers.show', $new_beer);

    }

    /**
     * Display the specified resource.
     */
    public function show(Beer $beer)
    {
        // dump($beer);
        return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beer $beer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beer $beer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beer $beer)
    {
        //
    }
}
