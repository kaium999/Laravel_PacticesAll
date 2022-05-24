<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="teacher" method="POST">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div>
            <input type="text" name="email" placeholder="Enter your email">
        </div>
        <div>
            <input type="text" name="mobile" placeholder="Enter your mobile">
        </div>
        <div>
            <input type="submit" value="save_data">
        </div>
    </form>
</body>
</html>