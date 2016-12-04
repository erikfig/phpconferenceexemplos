<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Sem utilização do Elixir e Cache Busting
            <link href="/css/app.css" rel="stylesheet" type="text/css" />
        -->
        <!-- Com utilização do Elixir e Cache Busting -->
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <example></example>
        </div>


        <script type="text/javascript" src="{{ elixir('js/app.js') }}" ></script>
        <!-- Javascript -->
    </body>
</html>