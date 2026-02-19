<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

</head>

<body>
    @include('common.header')
    <h1 class="text-center text-4xl font-bold text-blue-300">This About page</h1>
    <h2 class="text-center text-3xl font-bold text-green-500">{{$name}}</h2>
</body>

</html>