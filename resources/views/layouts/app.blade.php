@include('layouts.header')

<body>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
          
            @if (!(Request::url() === url('login') || Request::url() === url('register')))
                @include('layouts.navbar')
                @include('layouts.sidebar')
            @endif
            
            @include('includes.flashMessage')
            @yield('content')
            
            @if (!(Request::url() === url('login') || Request::url() === url('register')))
                @include('layouts.footer')
            @endif

            </div>
        </div>
    </body>
</html>
