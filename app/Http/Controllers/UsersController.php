<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\liens;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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


    public function systemsDataUser(){
        $liste_departement = Departement::orderBy('nom')->get();
        $liste_system_data = liens::orderBy('descriptions')->paginate(10);
        return view('users.index', compact('liste_system_data','liste_departement'));
    }
    public function filtreLiensUser(Request $request){

        $liste_departement = Departement::orderBy('nom')->get();
        //Recuperer la valeur entrer
        $valeurFiltre = $request->input('filtre');
        if (empty($valeurFiltre)) {
           $liste_system_data = liens::orderBy('descriptions')->paginate(10);
        }
        else {
            $liste_system_data = liens::orderBy('descriptions')->where('departement_id', $valeurFiltre)->paginate(10);
        }
        return view('users.index', compact('liste_system_data','liste_departement'));
    }
    public function rechercheLiensUser(Request $request){
        $liste_departement = Departement::orderBy('nom')->get();

        $valeurRechercher = $request->input('rechercher');
        //Rechercher la valeur saisie
        $liste_system_data = liens::where('descriptions','LIKE','%'.$valeurRechercher.'%')->paginate(10);
        return view('users.index', compact('liste_system_data','liste_departement'));
    }

    public function profil(){
        $user = Auth::user()->id;

        $recup = User::find($user);
        return view('users.profil', compact('recup'));
    }
}
