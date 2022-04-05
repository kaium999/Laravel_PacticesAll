<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="user" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Your name"><br>
        <input type="text" name="password" placeholder="Enter Your Password"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>