@extends('layouts.style')
@section('content')
    <div id="main" class="main">
        <div class="row">
            <div class="col-md-4">
                <div class="pagetitle">
                    <h1>Formulaire de modification</h1>
                    <nav>
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Liste Liens</a></li>
                        <li class="breadcrumb-item active">Formulaire de Modification</li>
                      </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <a href="{{ route('index-systems') }}" class="btn btn-primary w-100"  >Retour Liste Liens</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">Formulaire de modification du lien</h1>

                <form action="{{ route('soumission-modification', $itemsystem) }}" method="GET" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nom" name="nom" value="{{ $itemsystem->nom}}">
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
                            <input type="text" class="form-control" id="descriptions" name="descriptions" value="{{ $itemsystem->descriptions}}">
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
                                @if($itemsystem->Departement)
                                    <option value="{{ $itemsystem->departement_id }}">{{ $itemsystem->Departement->nom }}</option>
                                @endif
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
                                @if($itemsystem->Responsable)
                                    <option value="{{ $itemsystem->responsable_id }}">{{ $itemsystem->Responsable->intitule }}</option>
                                @endif
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
                        <button type="submit" class="btn btn-primary w-50">Modifier Lien</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
