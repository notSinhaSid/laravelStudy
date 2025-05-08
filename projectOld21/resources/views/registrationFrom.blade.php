<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>
    <h1>Register</h1>
    <div class="container">
        {{-- <form action="" method="POST">
            @csrf
            <label for="Name">Name</label>
            <input type="text" name="name" id="" placeholder="your name"><br><br>
            <label for="Email">Email</label>
            <input type="email" name="email" id="" placeholder="your email"><br><br>
            <label for="Pass">Password</label>
            <input type="password" name="pass" id="" placeholder="password"><br><br>

            <input type="submit" value="Register">
        </form> --}}


        <form action="" method="POST">
            @csrf
            <label for="Name">Name</label>
            <input type="text" name="name" id="" placeholder="your name" value="{{old('name')}}"><br><br>
            <label for="Email">Email</label>
            <input type="email" name="email" id="" placeholder="your email" value="{{old('email')}}"><br><br>
            <label for="Pass">Password</label>
            <input type="password" name="pass" id="" placeholder="password" value="{{old('pass')}}"><br><br>
    
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>