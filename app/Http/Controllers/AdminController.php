<?php

namespace App\Http\Controllers;

use App\Http\Requests\AjouterManager;
use App\Http\Requests\AjouterResponsable;
use App\Http\Requests\AjoutLien;
use App\Models\Departement;
use App\Models\liens;
use App\Models\Responsable;
use App\Models\roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrateur.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $liste_roles = roles::orderBy('intitule')->get();
        return view('administrateur.system-data.manager-create', compact('liste_roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $Manager,AjouterManager $request)
    {
        try {
            $Manager-> name = $request->name;
            $Manager-> email = $request->email;
            $Manager-> users_id = $request->users_id;
            $Manager-> password = Hash::make($request->input('password'));
            $Manager->save();
            return redirect()->route('index-systems')->with('message', 'Opération réussi...');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function listeManager()
    {
        $liste_manager = User::orderBy('name')->whereIn('users_id', [2,3])->paginate(10);
        return view('administrateur.system-data.liste-manager', compact('liste_manager'));
    }

    public function liste_departement(){
        $liste_responsable = Responsable::orderBy('intitule', 'desc')->get();
        $liste_departement = Departement::with('Responsable')->orderBy('nom')->paginate(5);
        return view('administrateur.system-data.liste-departement', compact('liste_departement', 'liste_responsable'));
    }

    public function creer_departement( ){

    }

    public function supprimer_departement(Departement $itemDepartement){
        try {
            $itemDepartement->delete();
            return back()->with('message','Suppression réussi !');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function creer_responsable(Responsable $Respons, AjouterResponsable $request){
        try {
            $Respons-> intitule = $request->intitule;
            $Respons->save();
            return redirect()->route('liste-departement')->with('message', 'Opération réussi...');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function supprimer_responsable(){

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

    public function systemsData(){
        $liste_departement = Departement::orderBy('nom')->get();
        $liste_system_data = liens::orderBy('descriptions')->paginate(10);
        return view('administrateur.system-data.index', compact('liste_system_data','liste_departement'));
    }

    //Fonction de filtrage de lien
    public function filtreLiens(Request $request){

        $liste_departement = Departement::orderBy('nom')->get();
        //Recuperer la valeur entrer
        $valeurFiltre = $request->input('filtre');
        if (empty($valeurFiltre)) {
           $liste_system_data = liens::orderBy('descriptions')->paginate(10);
        }
        else {
            $liste_system_data = liens::orderBy('descriptions')->where('departement_id', $valeurFiltre)->paginate(10);
        }
        return view('administrateur.system-data.index', compact('liste_system_data','liste_departement'));
    }

    //Fonction de rechercher lien
    public function rechercheLiens(Request $request){
        $liste_departement = Departement::orderBy('nom')->get();

        $valeurRechercher = $request->input('rechercher');
        //Rechercher la valeur saisie
        $liste_system_data = liens::where('descriptions','LIKE','%'.$valeurRechercher.'%')->paginate(10);
        return view('administrateur.system-data.index', compact('liste_system_data','liste_departement'));
    }
    //Formulaire d'affichage de creation de lien
    public function formulaireAjout(){
        $liste_departement = Departement::orderBy('nom')->get();
        $liste_responsable = Responsable::orderBy('intitule')->get();
        return view('administrateur.system-data.profil', compact('liste_responsable','liste_departement'));
    }

    //Creation d'un lien
    public function soumission(Liens $Liens, AjoutLien $request){
        try {
            $Liens->nom = $request->nom;
            $Liens->descriptions = $request->descriptions;
            $Liens->departement_id = $request->departement_id;
            $Liens->responsable_id = $request->responsable_id;
            $Liens->save();
            return redirect()->route('index-systems')->with('message', 'Opération réussi !');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    //Affichage du formulaire de modification
    public function modifierLien(liens $itemsystem){

        $liste_departement = Departement::orderBy('nom')->get();
        $liste_responsable = Responsable::orderBy('intitule')->get();

        return view('administrateur.system-data.modification', compact('liste_responsable','liste_departement','itemsystem'));
    }

    //Soumission des modifications
    public function modifierLiens(Request $request,liens $itemsystem){
        try {
            $itemsystem->nom = $request->nom;
            $itemsystem->descriptions = $request->descriptions;
            $itemsystem->departement_id = $request->departement_id;
            $itemsystem->responsable_id = $request->responsable_id;
            $itemsystem->update();
            //dd($itemsystem);
            return to_route('index-systems')->with('message','La modification a réussi...');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    //Fonction de suppression de lien
    public function suppresionLien(liens $itemsystem){
        try {
            $itemsystem->delete();
            return back()->with('message','Suppression réussi !');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    //Affichage Modidifcation Manager
    public function modidifcationManager(User $itemManager){
        $liste_roles = roles::orderBy('intitule')->get();
        return view('administrateur.system-data.modification-manager', compact('itemManager','liste_roles'));
    }
    //Soumission modification manager
    public function soumission_modifcation_manager(Request $request, User $itemManager){
        try {
            $itemManager->name = $request->name;
            $itemManager->email = $request->email;
            $itemManager->password = $request->password;
            $itemManager->update();
            return to_route('liste-manager');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    //Suppression manager
    public function suppremer_manager(User $itemManager){
        try {
            $itemManager->delete();
            return back()->with('message','Suppression réussi !');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
