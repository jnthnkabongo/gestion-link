<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Departement;
use App\Models\liens;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $roles = Auth::user()->users_id;
            // Reste du code
            if ($roles == '1') {
                $liste_departement = Departement::orderBy('nom')->get();
                $liste_system_data = liens::orderBy('descriptions')->paginate(10);

                return view('administrateur.system-data.index', compact('liste_departement','liste_system_data'));
            }
            if ($roles == '2') {
                $liste_departement = Departement::orderBy('nom')->get();
                $liste_system_data = liens::orderBy('descriptions')->paginate(10);

                return view('users.index', compact('liste_departement','liste_system_data'));
            }
            if ($roles == '3') {
                $liste_departement = Departement::orderBy('nom')->get();
                $liste_system_data = liens::orderBy('descriptions')->paginate(10);

                return view('manager.index', compact('liste_departement','liste_system_data'));
            }
        } else {
            // Gérer le cas où l'utilisateur n'est pas authentifié
            return view('auth.authentification');

        }
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
    public function destroy()
    {

    }
}
