@extends('base')

@section('title','About Us | '.config('app.name'))
    
@section('content')
  <p>Build with &hearts; by lengolo form les Teachers DU NET </p>

      <p><a href="{{ route('home') }}">Retour vers la page d'accueil</a></p>
@endsection
