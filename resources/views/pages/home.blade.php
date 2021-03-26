@extends('base')


@section('content')
    <img src="{{ asset('/img/senegal.jpg') }}" alt="drapeau du senegal">

     <h1>Hello from Senegal</h1>

     <p>It's currently {{ date('H:i') }}.</p>

@endsection
