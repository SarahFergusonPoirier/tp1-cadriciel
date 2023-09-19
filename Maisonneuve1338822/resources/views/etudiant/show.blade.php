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
            <button type="button" class="btn btn-danger mx-2">Supprimer</button>   
        </div>     
    </div>
@endsection