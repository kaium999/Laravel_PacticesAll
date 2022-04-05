<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($users as $use)
        {{$use->id}}
        {{$use->u_name}}
        {{$use->u_email}}
        {{$use->u_password}}
    @endforeach
</body>
</html>