<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h4>page only for session and flash session</h4>--}}
    {{-- <h4>Currently logged in as : {{$name}}</h4> --}}
    {{-- <h4>Currently assigned roll as : {{$roll}}</h4> --}}
    {{-- <h4>Currently present in : {{$city}}</h4>  --}}
    <h3>this is for flash session data that is passed here</h3>
    <h4>{{session('status')}}</h4>
</body>
</html>