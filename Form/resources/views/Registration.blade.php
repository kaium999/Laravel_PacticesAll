<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/style.css">
    <title>This is Registration Page</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <div>
        <label>Enter Your Name</label>
        <input type="text" name='name'></input>
        </div>
        <div>
            <label>Enter Your Email</label>
            <input type="text" name='email'></input>
        </div>
        <div>
            <label>Enter Your Password</label>
            <input type="password" name='Password'></input>
        </div>
        <div>
           
            <input type="submit"  value="Click Here"></input>
        </div>
    </form>
</body>
</html>