<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiant = Etudiant::all();// recuperation de la liste des etudiants dans la base de donné

        return view('etudiant.index',compact('etudiant'));
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
        //validatin du formulaire
        $request->validate([
            'prenom' => 'required|string|min:2|max:50|unique:etudiants',
            'nom' => 'required|string|min:2|max:50|unique:etudiants'
        ]);
        $etudiant = new Etudiant();
        $etudiant->prenom = $request->prenom;
        $etudiant->nom = $request->nom;
        $etudiant->save();
        return redirect()->route('etudiant.index')->with('message','Enregistrement effectué avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infoEtudiant = Etudiant::find($id);
        return view('etudiant.info')->with('infoEtudiant', $infoEtudiant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //suppression d'etudiant
    public function destroy($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->destroy($id);
        return redirect()->route('etudiant.index')->with('message','Enregistrement effectué avec succès');
    }
}
