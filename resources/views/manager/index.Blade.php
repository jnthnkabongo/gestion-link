@extends('layouts.style3')
@section('content')
    <div id="main" class="main">

        <div class="card">
            <div class="card-header text-center">
                <div class="row">
                    <div class="col-md-1"></div>

                    <div class="col-md-5">
                        <form class="row g-3" action="{{ route('recherche-manager') }}" method="GET" style="color: #004B90">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="rechercher" name="rechercher" placeholder="Rechercher..." aria-describedby="button-addon2" style="color: #004B90">
                                <button class="btn btn-outline-primary" type="submit" id="button-addon2">Rechercher</button>
                            </div>
                            </form>
                    </div>
                    <div class="col-md-5">
                        <form class="row g-3" action="{{ route('filtre-manager') }}" method="GET">
                            <div class="input-group mb-3">
                                <select class="form-select" name="filtre" id="filtre" style="color: #004B90">
                                    <option value="">Tous les départements</option>
                                    @foreach ($liste_departement as $itemDepartement)
                                        <option value="{{ $itemDepartement->id }}">{{ $itemDepartement->nom }}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-outline-primary">Filtre</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <div id="tableau" class="card-body">
                <table  class="table table-striped table-hover">
                    <thead >
                        <th><p class="tableau">N°</p></th>
                        <th><p class="tableau">Description du lien</p></th>
                        <th><p class="tableau">Liens</p></th>
                    </thead>
                    <tbody>
                        @forelse ($liste_system_data as $itemsystem)
                            <tr>
                                <td><p class="tableau">{{ ($liste_system_data->perPage() * ($liste_system_data->currentPage() - 1 ))+ $loop->iteration }}</p></td>
                                <td><p class="tableau">{{ $itemsystem->descriptions }}</p></td>
                                <td> <a class="liens" href="{{ $itemsystem->nom }}"><i class="bi bi-globe"></a></td>

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
                    {{ $liste_system_data->withQueryString()->links() }}
                </div>
            </div>
        </div>

    </div>

@endsection
