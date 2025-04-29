<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <style>
        .myClass{
            color: cornflowerblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>home page</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                @php
                    $description="new content";
                    $title = "new title";
                    // this can be accessed into the component below
                @endphp
                <x-includes.cards title='first card' sub-Title='first subtitle' description='description 1' class='myClass' />
                <x-includes.cards title='second card' sub-Title='second subtitle' :description=$description />
                <x-includes.cards title='third card' sub-Title='third subtitle' :description=$description />
                <x-includes.cards :title=$title sub-Title='third subtitle' :description=$description />
            </div>
        </div>
    </div>
</body>
</html>