@extends('layouts.style')
@section('content')
    <div id="main" class="main">
        <div class="row">
            <div class="col-md-4">
                <div class="pagetitle">
                    <h1>Liste Département</h1>
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
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <h4>Liste département</h4>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('create-departement') }}" class="btn btn-primary"><i class="bi bi-person-plus bi-lg"></i></a>
                            </div>
                        </div>
                        <div id="tableau" class="card-body">
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
                                        <td><p class="tableau">{{ ($liste_departement->perPage() * ($liste_departement->currentpage() -1) + $loop->iteration )}}</p></td>
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
            </div>
        </div>
    </div>
@endsection
