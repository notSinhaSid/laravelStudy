<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-lg-2">
                @include('includes.sidebar')
            </div>
            <div class="col-lg-10">
                {{$content}}
            </div>
        </div>
    </div>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>