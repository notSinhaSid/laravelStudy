<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h2>This is showproducts page</h2>
    <div class="container">
        {{-- includeing the header componenet which is located inside a folder --}}
        <x-includes.header />
        <div class="row">
            <div class="col-lg-4">
                <x-cards/>  
                <x-cards/>  
                <x-cards/>  
            </div>
        </div>
        {{-- <hr> --}}
    </div>
</body>
</html>