<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title',env('APP_NAME'))</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
      
      @yield('content')

      <footer>
        &copy; copyright {{ date('Y') }} 

        @if(!Route::is('about_us'))
          &middot; <a href="{{ route('about_us') }}">About Us</a></footer>
        @endif
    </body>
</html>
