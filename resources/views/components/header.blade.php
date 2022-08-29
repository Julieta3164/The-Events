<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>header</title>
</head>




<body>
  <header class="header">
    <div class="cabecera">
    <img id="img-header" src="{{ asset('./img/header.png') }}" />
  </div>
      <div class="logo">
        <img id="constructionImg" src="{{ asset('./img/logo.png') }}" />
      </div>
  </header>
</body>
</html>                     
