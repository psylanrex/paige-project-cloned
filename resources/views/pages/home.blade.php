@extends('layout.app')

@section('title', 'Home Page')

@section('head')
    
@stop

@section('body-classes', 'home')

@section('body')
    @include('fragments.slider')
    @include('fragments.features')
    @include('fragments.middle')
    @include('fragments.services')
    @include('fragments.process')
    @include('fragments.contact')
@stop

@section('footer')
    <script src="{!! \App\Helpers\AssetsHelper::elixir('js/app-home.js') !!}" type="text/javascript"></script>
@stop