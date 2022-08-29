<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>header</title>
</head>




<body>
  <footer>
    <div class="footer">
    <img id="img-header" src="{{ asset('./img/header.png') }}" />
  </div>


<div class="conteiner">
<div class="copy">
  <i class="bi bi-c-circle"></i>
  <p>2022 Company. Inc</p>
</div>

<div class="text">
<h3>GIACEDEMY</h3>
</div>

  <div class="icons">
    <i class="bi bi-facebook"></i>
    <i class="bi bi-instagram"></i>
    <i class="bi bi-linkedin"></i>
    <i class="bi bi-twitter"></i>
  </div>

</div>
  </footer>
</body>
</html>                     
