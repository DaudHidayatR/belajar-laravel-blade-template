<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        @isset($name)
            Hello, my name is {{$name}}
        @endisset
    </p>
    <p>
        @empty($hobbies)
            I don't have any hobbies
        @endempty
    </p>
</body>
</html>
