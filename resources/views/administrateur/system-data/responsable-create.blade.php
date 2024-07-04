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
                <a href="" class="btn btn-primary w-100"  >Retour Liste Liens</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">Formulaire d'ajout responsable</h1>

                <form action="{{ route('soumission-responsable') }}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="name" class="form-control" id="intitule" name="intitule" placeholder="Liens">
                            <label for="floatingName">Nom Responsable</label>
                        </div>
                        <div class="text-danger">
                            @error("intitule")
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
