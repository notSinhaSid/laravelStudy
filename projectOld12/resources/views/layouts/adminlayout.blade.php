<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @yield('basic-heading')
    @yield('contact')
    @yield('banner')
    @section('default-content')
        <h4>common content in every page</h4>
    @show
</body>
</html>