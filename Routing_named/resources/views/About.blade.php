<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>About</h1>
    <hr>
    </div>
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/profile">Profile</a></li>
    </ul>
    <hr>
    <ul>
        <li><a href="{{route ('home')}}">Home</a></li>
        <li><a href="{{route ('aboutme')}}">About</a></li>
        <li><a href="{{route ('contactme')}}">Contact</a></li>
        <li><a href="{{route ('contactme')}}">Contact</a></li>
        <!--<li><a href="{{route (' webProfile')}}">Profile</a></li>-->
    </ul>
</body>
</html>