<div>
    <h2>{{ $title }}</h2>
    <h3>{{ $subTitle }}</h3>
    <p>{{ $description }}</p>
    <hr>
    <h4>{{$addNumber(80)}}</h4>
    <hr>
</div>

<div>
    <h3 {{$attributes}}>Hello</h3>
</div>

<div>
    <h2 {{$attributes->merge(['class'=>'mClass'])}}>Merging</h2>
</div>