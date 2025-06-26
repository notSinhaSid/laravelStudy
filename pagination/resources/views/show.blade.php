<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show data</title>
</head>
<body>
    @foreach ($student as $item)
        {{$item->name}}
        {{$item->email}}
        {{$item->marks}}
        <br>
    @endforeach

    {{$student->links()}}
</body>
</html>