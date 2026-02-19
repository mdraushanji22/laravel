<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

</head>

<body>
    @include('common.header')

    <h1 class="text-center font-bold text-4xl text-green-400">This is my home page</h1>
    <!-- <h1>{{$username}}</h1>
    <br>
    <h2>
        {{$users[0]}}
    </h2> -->
    @if($username =='Raushan bhai')
    <h2>This is Raushan bhai</h2>
    @elseif($users[0]=='jilani')
    <h2>This is jilani</h2>
    @else
    <h2>Other users</h2>
    @endif
    <a href="/">Welcom Page</a>
    <a href="/about/Raushan">About Page</a>
    <a href="/contact">Contact me</a>
    <div>
        @foreach($users as $user)
        <h4>{{$user}}</h4>
        @endforeach
    </div>
    <div>
        @for($i=0;$i<=10;$i++)
            <h3>{{$i}}</h3>
            @endfor
    </div>
</body>

</html>