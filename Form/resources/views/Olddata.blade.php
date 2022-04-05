<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="">
        @csrf
        <div>
        <label>Enter Your Name</label>
        <input type="text" name='name' value="{{old('name')}}"></input>
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