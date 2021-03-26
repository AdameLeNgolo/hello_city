@extends('base')

@section('title','About Us | '.config('app.name'))
    
@section('content')
  <img src="{{ asset('/img/dylan.jpg') }}" alt="Dylan O'Brian" class="my-12 rounded-full shadow-md h-32">

  <h2 class="text-gray-700 mb-5">
    Build with <span class="text-pink-500">&hearts;</span> by lengolo form les Teachers DU NET 
  </h2>

      <p><a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Retour vers la page d'accueil</a></p>
@endsection
