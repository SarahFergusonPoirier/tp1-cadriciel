@extends('layouts.app')
@section('title', 'Modifier un étudiant')
@section('content')
    <div class="py-5 text-center">
        <h1 class="display-1">{{ $etudiant->nomEtudiant }}</h1>
    </div>
    <div class="w-50 mx-auto">
        <form method="post">
            @method('put')
            @csrf
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Nom complet</h6>
                    <input type="text" id="nomEtudiant" name="nomEtudiant" class="form-control w-50" value="{{ $etudiant->nomEtudiant }}" />
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Date de naissance</h6>
                    <input type="date" id="naissance" name="naissance" class="form-control w-50" value="{{ $etudiant->naissance }}" />
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Téléphone</h6>
                    <input type="text" id="phone" name="phone" class="form-control w-50" value="{{ $etudiant->phone }}" />
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Courriel</h6>
                    <input type="text" id="email" name="email" class="form-control w-50" value="{{ $etudiant->email }}" />
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Adresse</h6>
                    <input type="text" id="adresse" name="adresse" class="form-control w-50" value="{{ $etudiant->adresse }}" />
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Ville</h6> 
                    <select name="ville_id" id="ville_id">
                        @forelse($villes as $ville)
                            <option value="{{ $ville->id }}">{{ $ville->nomVille }}</option>
                        @empty
                            <option value="null">Liste indisponible</option>>
                        @endforelse
                    </select>
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <input type="submit" class="btn btn-success mx-2" value="Envoyer">
            <a href="{{ route('etudiant.show', $etudiant->id) }}" class="btn btn-danger mx-2">Annuler</a>
            </div>
        </form>
    </div>
@endsection