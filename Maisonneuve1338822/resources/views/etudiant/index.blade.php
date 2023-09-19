@extends('layouts.app')
@section('title', 'Liste des étudiants')
@section('content')
    <a href="{{ route('etudiant.create') }}" class='btn btn-primary'>Ajouter</a>
    @forelse($etudiants as $etudiant)
        <li>
            <a href="{{ route('etudiant.show', $etudiant->id) }}">{{ $etudiant->nomEtudiant }}</a> ||
            <a href="{{ route('etudiant.edit', $etudiant->id) }}">Modifier</a>
        </li>
    @empty
        <li>Aucun étudiant</li>
    @endforelse
@endsection