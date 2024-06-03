@extends('layouts.style2')
@section('content')
    <div id="main" class="main">
        <div class="card text-center">
            <div class="card-header">
              Formulaire de modification
            </div>
            <div class="card-body">
                    <form action="" method="POST" class="row g-3 mt-2">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="{{ $recup->email }}">
                                <label for="floatingName">E-mail</label>
                            </div>
                            <div class="text-danger">
                                @error("email")
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nom Utilisateur" value="{{ $recup->name }}">
                                <label for="floatingName">Nom Utilisateur</label>
                            </div>
                            <div class="text-danger">
                                @error("name")
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Ancien Mot de passe">
                                <label for="floatingEmail">Ancien Mot de passe</label>
                            </div>
                            <div class="text-danger">
                                @error("password")
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="role" name="role" placeholder="Rôle" >
                                <label for="">Nouveau Mot de passe</label>
                            </div>
                            <div class="text-danger">
                                @error("role")
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="role" name="role" placeholder="Rôle" value="{{ $recup->users_id }}" hidden>

                            </div>
                            <div class="text-danger">
                                @error("role")
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary w-50">Modifier</button>
                        </div>
                    </form>
            </div>

        </div>
    </div>
@endsection
