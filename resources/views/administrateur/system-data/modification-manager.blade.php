@extends('layouts.style')
@section('content')
    <div id="main" class="main">
        <div class="row">
            <div class="col-md-4">
                <div class="pagetitle">
                    <h1>Formulaire Modification</h1>
                    <nav>
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Liste Liens</a></li>
                        <li class="breadcrumb-item active">Formulaire Modification</li>
                      </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <a href="{{ route('liste-manager') }}" class="btn btn-primary w-100">Retour Liste Manager</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">Formulaire de modification d'un manager</h1>

                <form action="{{ route('soumission-modification-manager', $itemManager) }}" method="GET" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $itemManager->name }}">
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
                            <input type="text" class="form-control" id="email" name="email" value="{{ $itemManager->email }}">
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
                            <input type="text" class="form-control" value="{{ $itemManager->roles->intitule }}" readonly>
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
                            <input type="password" class="form-control" id="password" name="password" value="{{ $itemManager->password }}">
                            <label for="floatingName">Mot de passe</label>
                        </div>
                        <div class="text-danger">
                            @error("password")
                                {{ $message }}
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary w-50">Modification </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
