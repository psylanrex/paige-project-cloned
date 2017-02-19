<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="" id="vue-app"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="" id="vue-app"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="" id="vue-app"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="" id="vue-app"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Paige Project - @yield('title')</title>
    <?php /*<link rel="icon" type="image/ico" href="assets/images/favicon.ico"/> */ ?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{!! \App\Helpers\AssetsHelper::elixir('css/app.css') !!}"/>
    @yield('head')

</head>
<body class="app {{ \App\Helpers\AssetsHelper::getBodyClass() }} @yield('body-classes')">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

@include('nav.top');

@yield('body')


<script src="{!! \App\Helpers\AssetsHelper::elixir('js/app-assets.js') !!}" type="text/javascript"></script>
<script src="{!! \App\Helpers\AssetsHelper::elixir('js/app.js') !!}" type="text/javascript"></script>

@yield('footer')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            error: function (jqXHR) {
                // toastr['error']("Ajax request error: " + jqXHR.statusText);
            }
        });
        Vue.http.headers.common['X-CSRF-TOKEN'] = "{{ csrf_token() }}";
        var vm = new Vue({
            el: '#vue-app'
        });
    </script>
</body>
</html>