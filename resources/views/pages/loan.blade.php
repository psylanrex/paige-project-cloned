@extends('layout.app')

@section('title', 'Loan Page')

@section('head')
@stop

@section('body')
    <section id="content">
    	<br>
        <center>
            <h5 id="java-script"></h5>
            <h3>Loan Page</h3>
        </center>
    </section>
@stop

@section('footer')
    <script src="{!! \App\Helpers\AssetsHelper::elixir('js/app-loan.js') !!}" type="text/javascript"></script>
@stop