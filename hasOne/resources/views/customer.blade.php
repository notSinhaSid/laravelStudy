<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{$customer}}
    <h1>User name : {{$customer->name}}</h1>
    <h4>Email : {{$customer->email}}</h4>
</body>
</html>