<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Dispensar') }}</title> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"defer></script>

    <!-- datepicker -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" defer></script>
    
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
   

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/dist/css/theme.min.css')}}">

    <!-- for datapicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <!-- for datapicker -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" style="color: #0D6EFD; font-weight: bold;" href="{{ url('/') }}">
                    Dispensar
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                  
                    <ul class="navbar-nav ml-auto" style="color: #0D6EFD !important; font-weight: bold; font-size: 14px;">
                    @if(auth()->check()&& auth()->user()->role->name === 'patient')
                        <li class="nav-item">
                                <a class="nav-link" style="color: #0D6EFD; font-weight: bold; font-size: 14px;" href="{{ route('my.booking') }}">{{ __('Programările mele') }}</a>
                        </li>
                        @endif

                        @if(auth()->check()&& auth()->user()->role->name === 'patient')
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('my.prescription') }}" style="color: #0D6EFD; font-weight: bold; font-size: 14px;">{{ __('Prescripțiile medicale') }}</a>
                        </li>
                        @endif

            
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color: #0D6EFD; font-weight: bold; font-size: 14px;" href="{{ route('login') }}">{{ __('Conectare') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #0D6EFD; font-weight: bold; font-size: 14px;" href="{{ route('register') }}">{{ __('Inregistrare') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(auth()->check()&& auth()->user()->role->name === 'patient')
                                    <a href="{{url('user-profile')}}" class="dropdown-item">Profil</a>
                                    @else
                                    <a href="{{url('dashboard')}}" class="dropdown-item">Acasă</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconectare') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>




    <script>


  </script>
  <style type="text/css">
    .navbar{
    background: #CFE2FF!important;
    color: #fff!important;
    }
    body{
        background: #fff;
    }
    .ui-corner-all{
        background: red;
        color: #fff;
    }
    label.btn{
        padding: 0;
        line-height: 1.3;
    }
    label.btn input{
        opacity: 0; 
        position: absolute;
    }
    label.btn span{
        text-align: center; 
        padding: 6px 12px; 
        display: block;
        min-width: 80px;
    }
    label.btn input:checked+span{
        background-color: rgb(80,110,228); 
        color: #fff;
        line-height: 1.3;
        border-radius: 2px;
    }
</style>

</body>
</html>
