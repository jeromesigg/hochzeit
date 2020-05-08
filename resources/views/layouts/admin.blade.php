<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Zopfaktion">
        <meta name="author" content="Jérôme Sigg">
        <meta name="robots" content="all,follow">

        <title>Qualifikations Zentrale</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('css/admin.css')}}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/da9e6dcf22.js" crossorigin="anonymous"></script>

        @yield('styles')

    </head>

    <body>
        @include('includes/admin_sidenav')
        
        @include('includes/admin_topnav')

        @yield('content')
            <footer class="main-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 text-right">
                            <p>Design by Jerome, V0</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        

        <!-- jQuery -->
        <script src="{{asset('js/admin.js')}}"></script>
        @yield('scripts')
        
    </body>

</html>