<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/edit" method="POST">
        @csrf
        <div>
            <input type="hidden" name="id" value="{{$teacher['id']}}" >
        </div>
        <div>
        <input type="name" name="name" value="{{$teacher['tname']}}" >
        </div>
        <div>
            <input type="name" name="email" value="{{$teacher['temail']}}" >
        </div>
        <div>
            <input type="name" name="password" value="{{$teacher['tmobile']}}" >
        </div>
        <div>
            <input type="submit" value="update data" >
        </div>
    </form>
</body>
</html>