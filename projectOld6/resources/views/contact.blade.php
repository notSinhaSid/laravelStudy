<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new file</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>this is contact us page</h3><hr>
                <h5>implementing include directive</h5>
                {{-- {{$Id}} --}}

                @include('includepage', ['Id'=>1100996]);
            </div>
        </div>
    </div>
</body>
</html>