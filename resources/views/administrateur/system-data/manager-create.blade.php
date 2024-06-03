@extends('layouts.style')
@section('content')
    <div id="main" class="main">
        <div class="row">
            <div class="col-md-4">
                <div class="pagetitle">
                    <h1>Formulaire d'Ajout</h1>
                    <nav>
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Liste Liens</a></li>
                        <li class="breadcrumb-item active">Formulaire d'ajout</li>
                      </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <a href="{{ route('liste-manager') }}" class="btn btn-primary w-100"  >Retour Liste Liens</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">Formulaire d'ajout d'un manager</h1>

                <form action="{{ route('soumission-manager') }}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Liens">
                            <label for="floatingName">Nom</label>
                        </div>
                        <div class="text-danger">
                            @error("name")
                                {{ $message }}
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Description">
                            <label for="floatingName">E-mail</label>
                        </div>
                        <div class="text-danger">
                            @error("email")
                                {{ $message }}
                            @enderror
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="users_id" name="users_id" aria-label="Roles">
                                <option value="">Roles</option>
                                @foreach ($liste_roles as $itemDepartement)
                                    <option value="{{ $itemDepartement->id }}">{{ Str::upper( $itemDepartement->intitule ) }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Roles</label>
                        </div>
                        <div class="text-danger">
                            @error("users_id")
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                            <label for="floatingName">Mot de passe</label>
                        </div>
                        <div class="text-danger">
                            @error("password")
                                {{ $message }}
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary w-50">Enregistrement</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
