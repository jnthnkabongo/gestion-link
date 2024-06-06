@extends('layouts.style')
@section('content')
    <div id="main" class="main">
        <div class="row">
            <div class="col-md-4">
                <div class="pagetitle">
                    <h1>Formulaire d'Ajout</h1>
                    <nav>
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Liste Departement</a></li>
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
        <div class="row">
            <div class="col-7 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">Liste département</h1>

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th><p class="tableau">N°</p></th>
                                    <th><p class="tableau">Nom département</p></th>
                                    <th><p class="tableau">responsable département</p></th>
                                    <th><p class="tableau">Actions</p></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($liste_departement as $itemDepartement)
                                <tr>
                                    <td><p class="tableau">{{ $itemDepartement->id}}</p></td>
                                    <td><p class="tableau">{{ $itemDepartement->nom}}</p></td>
                                    <td><p class="tableau">{{ $itemDepartement->Responsable ? $itemDepartement->Responsable->intitule : 'Aucun responsable'}}</p></td>
                                    <td>
                                        <a class="liens" href="{{ route('supprimer-departement', $itemDepartement) }}"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                @empty

                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-5 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">Ajouter un Responsable</h1>

                        <form class="row g-3" action="{{ route('soumission-responsable') }}" method="POST" class="row g-3">
                            @csrf

                            <div class="col-auto">
                              <label for="inputPassword2" class="visually-hidden">Responsable</label>
                              <input type="text" class="form-control" id="intitule" name="intitule" placeholder="Responsable">
                            </div>
                            <div class="col-auto">
                              <button type="submit" class="btn btn-primary mb-3">Enregistrer</button>
                            </div>
                          </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">Ajouter un département</h1>

                        <form action="{{ route('soumission-departement') }}" method="POST" class="row g-3"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-custom-class="custom-tooltip"
                        data-bs-title="Avertissement !! Avant de rajouter un departement. Veuillez ajouter le responsable.">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Liens">
                                    <label for="floatingName">Nom</label>
                                </div>
                                <div class="text-danger">
                                    @error("name")
                                        {{ $message }}
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="responsable_id" name="responsable_id" aria-label="Roles">
                                        <option value="">Responsable</option>
                                        @foreach ($liste_responsable as $itemResponsable)
                                            <option value="{{ $itemResponsable->id }}">{{ $itemResponsable->intitule }}</option>
                                        @endforeach

                                    </select>
                                    <label for="floatingSelect">Responsable</label>
                                </div>
                                <div class="text-danger">
                                    @error("users_id")
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-primary"
                                    data-bs-toggle="tooltip" data-bs-placement="top">
                                    Enregistrer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
