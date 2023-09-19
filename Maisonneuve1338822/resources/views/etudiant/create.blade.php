@extends('layouts.app')
@section('title', 'Ajouter un étudiant')
@section('content')
    <div class="py-5 text-center">
        <h1 class="display-1">Ajouter un étudiant</h1>
    </div>
    <div class="w-50 mx-auto">
        <form method="post">
            @csrf
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Nom complet</h6>
                    <input type="text" id="nomEtudiant" name="nomEtudiant" class="form-control w-50" />
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Date de naissance</h6>
                    <input type="date" id="naissance" name="naissance" class="form-control w-50" value="<?php echo date('Y-m-d')?>" />
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Téléphone</h6>
                    <input type="text" id="phone" name="phone" class="form-control w-50" />
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Courriel</h6>
                    <input type="text" id="email" name="email" class="form-control w-50" />
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Adresse</h6>
                    <input type="text" id="adresse" name="adresse" class="form-control w-50" />
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6>Ville</h6>
                    <input type="text" id="ville_id" name="ville_id" class="form-control w-50" />
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <input type="submit" class="btn btn-success mx-2" value="Envoyer">
            <a href="{{ route('etudiant.index') }}" class="btn btn-danger mx-2">Annuler</a>
            </div>
        </form>
    </div>
@endsection