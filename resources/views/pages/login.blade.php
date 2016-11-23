@extends('layout.app')

@section('title', 'Login Page')

@section('head')
    
@stop

@section('body')
    <section id="content">
    	<br>
        <center>
            <h5 id="java-script"></h5>
            <h3>Login Page</h3>
        </center>
    </section>
@stop

@section('footer')
    <script src="{!! \App\Helpers\AssetsHelper::elixir('js/app-login.js') !!}" type="text/javascript"></script>
@stop