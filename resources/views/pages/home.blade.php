@extends('base')


@section('content')
    <img src="{{ asset('/img/senegal.jpg') }}" alt="drapeau du senegal" class="mt-12 rounded shadow-md h-32">

     <h1 class="mt-5 font-semibold text-3xl sm:text-5xl text-indigo-600">Hello from Senegal</h1>

     <p class="text-lg text-gray-800">It's currently {{ date('H:i') }}.</p>

@endsection
