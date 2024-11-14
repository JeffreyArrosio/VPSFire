<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('login.post')}}" method="post">
        @csrf
        Inicia Sesion
        <div>
            <label>Email: <input type="email" name="email"></label>
            <label>Password: <input type="password" name="password"></label>
            <input type="submit" name="signup" value="Sign Up">
        </div>

    </form>
</body>

</html>