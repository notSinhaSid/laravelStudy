<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is profile page</h1>
    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}✅
        </div>
    @endif
</body>
</html>