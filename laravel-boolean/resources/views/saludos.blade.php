<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sayHello</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
  </head>
  <body>

    <h1 class="hola">Hola Todos</h1>
    <h1 class="hola">Hola {{$hombre}}</h1>
    <h1 class="hola">Hola {{$mujer}}</h1>


  </body>
</html>
