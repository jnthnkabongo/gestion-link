<?php

namespace App\Http\Controllers;

use App\Http\Requests\Credentials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*User::create([
            'name' => 'emmanuel',
            'email' => 'e.emmanuel@bboxx.com',
            'password' => Hash::make('12345'),
            'users_id' => '2'
        ]);*/
        return view('auth.authentification');
    }

    public function login(Credentials $request){

        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('redirect'))->with('message','Bienvenu(e) dans  notre page');

        }
        return to_route('redirect')->withErrors('Les informations saisies sont pas corrects ')->onlyInput('email');
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
        Auth::logout();
        return redirect()->route('page-accueil')->with('message', 'Déconnecté avec succès...');
    }
}
