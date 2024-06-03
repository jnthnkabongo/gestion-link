@extends('layouts.style3')
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
            <h1 class="card-title text-center">Formulaire d'ajout de lien</h1>

            <form action="{{ route('soumission-lien-manager') }}" method="POST" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="url" class="form-control" id="nom" name="nom" placeholder="Liens">
                        <label for="floatingName">Liens</label>
                    </div>
                    <div class="text-danger">
                        @error("nom")
                            {{ $message }}
                        @enderror
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="descriptions" name="descriptions" placeholder="Description">
                        <label for="floatingName">Description</label>
                    </div>
                    <div class="text-danger">
                        @error("descriptions")
                            {{ $message }}
                        @enderror
                    </div>

                </div>


                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="departement_id" name="departement_id" aria-label="Département">
                            <option value="">Département</option>
                            @foreach ($liste_departement as $itemDepartement)
                                <option value="{{ $itemDepartement->id }}">{{ $itemDepartement->nom }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Departement</label>
                    </div>
                    <div class="text-danger">
                        @error("departement_id")
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="responsable_id" name="responsable_id" aria-label="Responsable">
                            <option value="">Responsable</option>
                            @foreach ($liste_responsable as $itemResponsable)
                                <option value="{{ $itemResponsable->id }}">{{ $itemResponsable->intitule }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Responsable</label>
                    </div>
                    <div class="text-danger">
                        @error("responsable_id")
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
