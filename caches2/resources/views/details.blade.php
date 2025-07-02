<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>this is the details page</h3><br>
    <h3>
        @foreach ($student as $item)
            {{$item->name}}
            {{$item->city}}
            <br>
        @endforeach
    </h3>
</body>
</html>