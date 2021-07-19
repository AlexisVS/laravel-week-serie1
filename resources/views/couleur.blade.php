<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
  @include("partials.header")
  <p class="@if ($color == "blue")fw-bolder @endif">blue</p>
  <p class="@if ($color == "red")fw-bolder @endif">red</p>
  <p class="@if ($color == "green")fw-bolder @endif">green</p>
  <p class="@if ($color == "yellow")fw-bolder @endif">yellow</p>
  <p class="@if ($color == "pink")fw-bolder @endif">pink</p>
  <p class="@if ($color == "black")fw-bolder @endif">black</p>
  <p class="@if ($color == "white")fw-bolder @endif">white</p>
  <p class="@if ($color == "grey")fw-bolder @endif">grey</p>
  <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>