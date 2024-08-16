@extends('layouts.style')
@section('content')
    <div id="main" class="main">
        <div class="row">
            <div class="col-md-4">
                <div class="pagetitle">
                    <h1>Liste Responsable</h1>
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
                                <h4>Liste responsable</h4>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('create-responsable') }}" class="btn btn-primary"><i class="bi bi-person-plus bi-lg"></i></a>
                            </div>
                        </div>
                        <div id="tableau" class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><p class="tableau">N°</p></th>
                                        <th><p class="tableau">Nom responsable</p></th>
                                        <th><p class="tableau">Département affecté</p></th>
                                        <th><p class="tableau">Actions</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($liste_responsable as $itemResponsable)
                                    <tr>
                                        <td><p class="tableau">{{ ($liste_responsable->perPage() * ($liste_responsable->currentPage() - 1) + $loop->iteration) }}</p></td>
                                        <td><p class="tableau">{{ $itemResponsable->intitule}}</p></td>
                                        <td><p class="tableau">{{ $itemResponsable->nom}}</p></td>
                                        <td><p class="tableau">{{ $itemResponsable->Departement ? $itemResponsable->Departement->nom : 'Aucun departement' }}</p></td>
                                        <td>
                                            <a class="" href=""><i class="bi bi-pencil"></i></a>
                                            <a class="liens" href="{{ route('supprimer-responsable', $itemResponsable) }}"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    @empty

                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="container-fluid">
                                {{ $liste_responsable->withQueryString()->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
