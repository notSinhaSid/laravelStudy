<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>This is basic contact page {{$cntNo}}</h1><hr>
                <h4>The current time is in second : {{time()}}</h4>
            </div>
        </div>
{{-- this is basic if elseif else statement --}}
        @if($cntNo == 'Jaideep')
            <h1>Everyone , lets welcome our presenter</h1>
        @elseif($cntNo == 'Saksham')
            <h3>Welcome our sponsors</h3>
        @else
            <h5>This is just a visitor</h5>

        @endif

{{-- next controll directive in blade template --}}

        {{-- unless directive --}}
        @unless($cntNo =='Admin')
            <h4>You are not authorized to access the page</h4>
        @endunless

{{-- isset variable , which is used in global check in php --}}

        @isset($cntNo)
            <h3>The name is set</h3>
        @endisset

{{-- checking empty set --}}

        @empty($Id)
            <h4>The ID is empty</h4>
        @endempty

{{-- production directive --}}

        @production
            <h3>This can't be seen</h3>
        @endproduction

{{-- enviroment directive --}}

        @env(['local'.'staging'])
            <h3>this is local machine</h3>
        @endenv

{{-- switch case --}}

        @switch(5)
            @case(1)
                <h1>This is heading 1</h1>
                @break
            @case(2)
                <h2>This is heading 2</h2>
                @break
            @case(3)
                <h3>This is heading 3</h3>
                @break
            @default
                <h6>default case of heading</h6>
        @endswitch

{{-- for loop in blade template --}}

        @for ($i = 0; $i < 5; $i++)
            <h5>{{$i}}</h5>
        @endfor


{{-- foreach loop in blade template --}}
        @foreach ($students as $item)
            <h4>{{$item}}</h4>
        @endforeach

{{-- for else loop  --}}

        @forelse ($students as $item)
        {{-- if elements are present then , it works as foreach --}}
            <h4>{{$item}}</h4>
        @empty
        {{-- but if not present content , then checks if condition like empty condition --}}
            <h3>The contents are not provided</h3>
        @endforelse

{{-- while statement --}}
        {{-- $i =4;
        @while ($i>0)
            <h4>{{$i}}</h4>
            $i--;            
        @endwhile --}}

{{-- break and continue statement --}}
        <br><hr>
        @foreach ($students as $item)
            @if($item =="Sahil")
                @break
            @endif
            <h3>{{$item}}</h3>
        @endforeach

        {{--
        @foreach($collection as $item)
            $break($item == 'check_item')
        @endforeach 
         --}}
{{-- continue --}}

        @foreach ($students as $item)
            @if($item == 'Sahil')
                @continue
            @endif
            <h3>{{$item}}</h3>
        @endforeach
        

{{-- loop variable items --}}

        @foreach ($students as $item)
            <h4>{{$item}}</h4>
            @if ($loop->first)
                <h1>FIRST ELEMENT</h1>
            @endif
            @if ($loop->last)
                <h1>LAST ELEMENT</h1>
            @endif
        @endforeach
</body>
</html>