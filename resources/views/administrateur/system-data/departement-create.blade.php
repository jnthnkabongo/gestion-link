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
                <h1 class="card-title text-center">Formulaire d'ajout département</h1>

                <form action="{{ route('soumission-departement') }}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-select" name="responsable_id" id="">
                                <option class="" value="">Responsable</option>
                                @foreach ($liste_responsable as $itemResponsable)
                                    <option value="{{ $itemResponsable->id }}">{{ $itemResponsable->intitule }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Responsable</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="name" class="form-control" id="nom" name="nom" placeholder="Liens">
                            <label for="floatingName">Nom Département</label>
                        </div>
                        <div class="text-danger">
                            @error("nom")
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
