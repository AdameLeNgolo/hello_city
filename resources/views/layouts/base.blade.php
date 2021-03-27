<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- les ?? si title est defini et que ce n'est pas vide la valeur retournee sera title sinon config --}}
        {{-- <title>{{ $title ?? config('app.name')}}</title>  --}}

        <title>{{ page_title($title ?? null) }}</title> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        
    </head>
    <body class="py-6 flex flex-col justify-between min-h-screen items-center">
      <main role="main" class="flex flex-col justify-center items-center ">
  
        @yield('content')
      </main>

      @include('layouts/partials/_footer')
    </body>
</html>
