<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        body{
            background: grey;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    Bonjour {{ $name }},
    <p>Bienvenu</p>
    <p>{!!$body!!}</p>
</body>
</html>
