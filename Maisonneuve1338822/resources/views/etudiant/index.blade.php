@extends('layouts.app')
@section('title', 'Liste des étudiants')
@section('content')
    @forelse($etudiants as $etudiant)
        <li><a href="{{ route('etudiant.show', $etudiant->id) }}">{{ $etudiant->nomEtudiant }}</a></li>
    @empty
        <li>Aucun étudiant</li>
    @endforelse
@endsection