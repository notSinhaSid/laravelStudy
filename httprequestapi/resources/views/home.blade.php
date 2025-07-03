<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home page</title>
</head>
<body>
    <h1>This is home page</h1>
    @foreach ($data as $item)
        <h2>{{$item['title']}}</h2>
        {{$item['body']}}
        <br>
        <hr>
    @endforeach
</body>
</html>