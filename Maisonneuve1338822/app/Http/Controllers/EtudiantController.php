<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Models\Ville; 

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all(); 
        return view('etudiant.index', ['etudiants' => $etudiants]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEtudiant = Etudiant::create([
            'nomEtudiant' => $request->nomEtudiant,
            'naissance' => $request->naissance,
            'phone' => $request->phone,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'ville_id' => $request->ville_id
        ]);

        return redirect(route('etudiant.index')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        $ville = Ville::all()->where('id', $etudiant->ville_id); 
        foreach ($ville as $v) {
            $nomVille = $v->nomVille; 
        } 
        return view('etudiant.show', ['etudiant' => $etudiant, 'ville' => $nomVille]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $villes = Ville::all(); 
        $ville = $villes->where('id', $etudiant->ville_id);  
        foreach ($ville as $v) {
            $nomVille = $v->nomVille; 
        } 
        return view('etudiant.edit', ['etudiant' => $etudiant, 'villes' => $villes, 'ville' => $nomVille]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update([
            'nomEtudiant' => $request->nomEtudiant,
            'naissance' => $request->naissance,
            'phone' => $request->phone,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'ville_id' => $request->ville_id
        ]);

        return redirect(route('etudiant.show', $etudiant->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
