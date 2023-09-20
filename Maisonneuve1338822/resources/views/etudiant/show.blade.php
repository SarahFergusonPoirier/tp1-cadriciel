@extends('layouts.app')
@section('title', 'Voir un étudiant')
@section('content')
    <div class="py-5 text-center">
        <h1 class="display-1">{{ $etudiant->nomEtudiant }}</h1>
    </div>
    <div class="w-50 mx-auto">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6>Nom complet</h6>
                <span>{{ $etudiant->nomEtudiant }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6>Date de naissance</h6>
                <span>{{ \Carbon\Carbon::parse($etudiant->naissance)->format('F j, Y') }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6>Téléphone</h6>
                <span>{{ $etudiant->phone }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6>Courriel</h6>
                <span>{{ $etudiant->email }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6>Adresse</h6>
                <span>{{ $etudiant->adresse }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6>Ville</h6>
                <span>{{ $ville }}</span>
            </li>
        </ul>
        <div class="d-flex justify-content-center">
            <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-primary mx-2">Modifier</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Supprimer</button> 
        </div>     
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Voulez-vous vraiment effacer la donnée? {{ $etudiant->nomEtudiant }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{route('etudiant.delete', $etudiant->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Effacer" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection