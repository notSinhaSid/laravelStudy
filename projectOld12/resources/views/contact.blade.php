@extends('layouts.adminlayout')
@section('contact')
    <span>This is contact page</span>
@endsection

@section('banner')
    <h3>banner section and hero section</h3>
@endsection

@section('default-content')
@parent
    <h5>over-riding the default-content</h5>
@endsection