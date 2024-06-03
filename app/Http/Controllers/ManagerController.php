<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\liens;
use App\Models\Departement;
use App\Models\Responsable;
use App\Http\Requests\AjoutLien;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $liste_departement = Departement::orderBy('nom')->get();
        $liste_system_data = liens::orderBy('descriptions')->paginate(10);
        return view('manager.index', compact('liste_system_data','liste_departement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $liste_responsable = Responsable::orderBy('intitule')->get();
        $liste_departement = Departement::orderBy('nom')->get();
        return view('manager.create', compact('liste_departement','liste_responsable'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function stores(Request $request)
    {
        //
    }
    public function store(Liens $Liens, AjoutLien $request){
        try {
            $Liens->nom = $request->nom;
            $Liens->descriptions = $request->descriptions;
            $Liens->departement_id = $request->departement_id;
            $Liens->responsable_id = $request->responsable_id;
            $Liens->save();
            return redirect()->route('index-manager')->with('message', 'Opération réussi !');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $liste_departement = Departement::orderBy('nom')->get();

        $valeurRechercher = $request->input('rechercher');
        //Rechercher la valeur saisie
        $liste_system_data = liens::where('descriptions','LIKE','%'.$valeurRechercher.'%')->paginate(10);
        return view('manager.index', compact('liste_system_data','liste_departement'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $liste_departement = Departement::orderBy('nom')->get();
        //Recuperer la valeur entrer
        $valeurFiltre = $request->input('filtre');
        if (empty($valeurFiltre)) {
           $liste_system_data = liens::orderBy('descriptions')->paginate(10);
        }
        else {
            $liste_system_data = liens::orderBy('descriptions')->where('departement_id', $valeurFiltre)->paginate(10);
        }
        return view('manager.index', compact('liste_system_data','liste_departement'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
