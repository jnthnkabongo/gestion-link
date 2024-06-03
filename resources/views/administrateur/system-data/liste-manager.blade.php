@extends('layouts.style')
@section('content')
    <div id="main" class="main">
        <div class="pagetitle">
            <h1>Liste Manager</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index-systems') }}">Home</a></li>
                <li class="breadcrumb-item active">Liste Manager</li>
              </ol>
            </nav>
        </div>

        <div class="card">
            <div class="card-header text-center">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h4>Liste Manager</h4>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-primary" href="{{ route('creation-manager') }}"><i class="bi bi-person-plus bi-lg"></i></a>
                    </div>
                </div>

            </div>
            <div id="tableau" class="card-body">
                <table  class="table table-striped table-hover">
                    <thead >
                        <th><p class="tableau">N°</p></th>
                        <th><p class="tableau">Nom Utilisateur</p></th>
                        <th><p class="tableau">E-mail</p></th>
                        <th><p class="tableau">Roles</p></th>
                        <th><p class="tableau">Actions</p></th>
                    </thead>
                    <tbody>
                        @forelse ($liste_manager as $itemManager)
                            <tr>
                                <td><p class="liens">{{ ($liste_manager->perPage() * ($liste_manager->currentPage() - 1 ))+ $loop->iteration }}</p></td>
                                <td><p class="liens">{{ $itemManager->name }}</p></td>
                                <td><p class="liens"> {{ $itemManager->email }}</p></td>
                                <td><p class="liens"> {{ Str::upper($itemManager->roles->intitule) }}</p></td>
                                <td>
                                    <a class="liens" href="{{ route('affichage-modification-manager', $itemManager) }}"><i class="bi bi-pencil"></i></a>&nbsp;
                                    <a class="liens" href="{{ route('supprimer-manager', $itemManager) }}"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @empty

                        @endforelse
                        <tr>

                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted">
                <div class="container-fluid">
                    {{ $liste_manager->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
