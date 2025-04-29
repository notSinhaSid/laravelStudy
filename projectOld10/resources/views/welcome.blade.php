<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SLOTS</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>This is home page</h1>

                {{-- <x-alert-component /> --}}
                <x-alert-component>
                    {{-- this is name slot with name attribute which give the name to the slot --}}
                    <span>This basic slot</span>
                    {{-- this one is basic slot --}}
                    <x-slot name="title">Named Slot</x-slot>
                </x-alert-component>
                
            </div>
        </div>
    </div>
</body>
</html>