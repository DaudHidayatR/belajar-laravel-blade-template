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
@push("script")
    <script src="first.js"/>
@endpush
@push('script')
    <script src="second.js"/>
@endpush
@prepend('script')
    <script src="third.js"/>
@endprepend
@stack('script')
</body>
</html>
