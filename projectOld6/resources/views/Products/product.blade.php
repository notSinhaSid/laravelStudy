<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>This is product page</h3>
                {{-- @includeIf('Products/homeproduct'); --}}
                @includeIf('Products/smallProducts', ['some' => 'data'])

                {{-- include when and unless --}}

                {{-- @includeWhen($userType, 'Products/homeproduct'); --}}

                @includeUnless($userType, 'Products/homeproduct')

                @once
                    <h3>one evalution per cycle</h3>
                @endonce
{{-- rendering RAW PHP code inside blade template --}}
                @php
                    for ($i=0; $i < 5; $i++) { 
                        echo $i;
                    }
                @endphp
            </div>
        </div>
    </div>
</body>
</html>