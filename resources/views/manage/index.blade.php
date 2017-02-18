@extends('layout.app')

@section('title', 'Manage | Home')

@section('head')
    
@stop

@section('body')
    <div class="row">
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/manage') }}">Login</a></li>
                <li><a href="{{ url('/manage/register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        My name is {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/manage/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/manage/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
    <div class="row">
	  <div class="col-md-2">
	  	<div class="sidebar content-box" style="display: block;">
            <ul class="nav">
                <!-- Main menu -->
                <li class="current"><a href=""><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li><a href=""><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                <li><a href=""><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                <li><a href="/manage/customers"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
            </ul>
         </div>
	  </div>
	  <div class="col-md-10">
	      @yield('manage-content');
	  </div>
	</div>
		  

@stop