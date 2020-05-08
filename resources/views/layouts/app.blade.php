<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')  
</head>
<body>
    <div id="app">

        @guest
        @else
            @include('includes.header')

            @include('includes.title') 
        @endguest

        <main id="main">
            @yield('content')
        </main>

        {{-- @guest
        @else
            @include('includes.footer')    
        @endguest --}}
        
        <!-- ======= Footer ======= -->
  

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    </div>
    <!-- jQuery -->
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>
