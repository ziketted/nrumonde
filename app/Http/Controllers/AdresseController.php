<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use App\Http\Requests\StoreAdresseRequest;
use App\Http\Requests\UpdateAdresseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdresseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $adresses = Adresse ::all();
        return view('adresses.index', ['adresses'=>$adresses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data

        $request->validate([
            'region' => 'required|string|max:255',
            'sousregion' => 'nullable|string|max:255',
            'ville' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'pays' => 'required|string|max:500',
        ]);


        // Create a new Adresse using the request data
        Adresse::create(array_merge($request->all(), ['user_id' => Auth::id()]));

        // Redirect back to the index page with a success message
        return redirect()->route('adresse.index')->with('success', 'Adresse created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Adresse $adresse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adresse $adresse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdresseRequest $request, Adresse $adresse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adresse $adresse)
    {
        //
    }
}
