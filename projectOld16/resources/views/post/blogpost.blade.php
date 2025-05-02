<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>This is Post Paeg</h2>
    <ul>
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/posts">Post</a></li>
    </ul>
    <hr>
    <ul>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('blogspost',['category'=>'foods']) }}">Post</a></li>
    </ul>
</body>
</html>