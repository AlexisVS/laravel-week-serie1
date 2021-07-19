<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @if ((is_numeric($variable1) == true) & (is_numeric($variable2) == true))
        <h2>{{ $variable1 + $variable2 }}</h2>
        <h2>{{ $variable1 - $variable2 }}</h2>
    @else
    <h2>Un des chiffres ou les deux n'est pas un type number</h2>
    @endif

</body>

</html>
