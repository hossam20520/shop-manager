<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
</head>
<body>



        <div class="d-flex" id="wrapper">

                <!-- Sidebar -->
                <div class="bg-light border-right" id="sidebar-wrapper">
                  <div class="sidebar-heading">Start Bootstrap </div>
                  <div class="list-group list-group-flush">
                    <a href="{{ url('/home') }}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                    <a href="{{ url('/products/add') }}" class="list-group-item list-group-item-action bg-light">Add Product</a>
                    <a href="{{ url('/products') }}" class="list-group-item list-group-item-action bg-light">Products</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
                  </div>
                </div>
                <!-- /#sidebar-wrapper -->
            
                <!-- Page Content -->
                <div id="page-content-wrapper">
            
                  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
            
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>


                          </div>
                        </li>
                      </ul>
                    </div>
                  </nav>
            
                  <div class="container-fluid">

                        {{-- {{ Auth::user()->name }} --}}
                        @yield('content')

            
                
                
                </div>
                </div>
                <!-- /#page-content-wrapper -->
            
              </div>





              <script src="js/jquery/jquery.min.js"></script>
              <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
