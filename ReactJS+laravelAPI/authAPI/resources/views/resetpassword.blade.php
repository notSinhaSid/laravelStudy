<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
</head>
<body style="margin: 100px;">
    <h1>You have requested to reset your passowrd</h1>
    <hr>
    <p>
        we cannot simply send you your old password. A unique link to reset you password has been generated for you.
        Click on the link and follow the instructions.
    </p>
    <h1><a href="http://127.0.0.1:3000/api/user/reset/{{ $token }}">Click on this to reset password</a></h1>
</body>
</html>