<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sayHello</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
  </head>
  <body>

    <p>Hello a nomi statici:</p>
    <h1 class="hello">hello Marco</h1>
    <h1 class="hello">hello Davide</h1>
    <h1 class="hello">hello Simone</h1>

    <p>Hello a nomi variabili:</p>
    <h1 class="hello">hello {{$name1}}</h1>
    <h1 class="hello">hello {{$name2}}</h1>


  </body>
</html>
