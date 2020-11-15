@guest
@else
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="{{ url('/') }}"><span>Stefanie & Jérôme</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul id="top-menu">
                <li class="active"><a href="#header">Home</a></li>
                <li><a href="#timeline">Zeitplan</a></li>
                <li><a href="#invitation">Anmeldung</a></li>
                <li><a href="#photos">Fotos</a></li>
                <li><a href="#gifts">Geschenke</a></li>
                @if(Auth::user()->isInvited())
                    <li><a href="#story">Über uns</a></li>
                @endif
                <li><a href="#team">Trauzeugen</a></li>
                <li><a href="#contact">Kontakt</a></li>
                @if (Auth::user()->isAdmin())
                    <li><a href="/admin" target="blank">Dashboard</a></li>            
                @endif
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->username }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" style="color:black;" href="{{ route('logout') }}"
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
            </nav><!-- .nav-menu -->

        </div>
        @if (session()->has('success'))
            <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>
                    {!! session()->get('success') !!}
                </strong>
            </div>
        @endif
    </header><!-- End Header -->

@endguest