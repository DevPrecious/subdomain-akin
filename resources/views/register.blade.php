<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="{{ route("register") }}" method="POST">
        @csrf
        <input type="text" name="username" id="" placeholder="Username"> <br>
        @error('username')
            <span style="color:red">{{ $message }}</span> <br>
        @enderror
        <input type="text" name="email" id="" placeholder="email"> <br>
        @error('email')
        <span style="color:red">{{ $message }}</span> <br>
        @enderror
        <input type="text" name="password" id="" placeholder="password"> <br>
        @error('password')
        <span style="color:red">{{ $message }}</span> <br>
        @enderror
        <button type="submit">Register</button>
    </form>
</body>
</html>