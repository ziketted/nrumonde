<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $agents= Agent::all();
        return view('agents.index', ['agents'=>$agents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


        return view('agents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validation des données
        $request->validate([
            'numero' => 'required|unique:agents,numero',
            'nom' => 'required|string|max:255',
            'sexe' => 'required',
            'date' => 'required|date|after_or_equal:2018-12-31',
            'lieu_naissance' => 'required|string|max:255',
            'email' => 'required|email|unique:agents,email',
            'phone' => 'required|string|max:15',
            'etat_civil' => 'required',
            'niveau' => 'required|string|max:255',
            'academique' => 'required|string|max:255',
            'numerocitoyannete' => 'required|string|max:255',
            'certificat' => 'required|string|max:255',
            'nationalite' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'commune' => 'required|string|max:255',
            'adresse' => 'required|string',
        ]);


        Agent::create(array_merge($request->all(), ['user_id' => Auth::id()]));
        return redirect()->route('agent.index')->with('success', 'Agent ajouté avec succès.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgentRequest $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        //
    }
}
