<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center">
                <h2 class="h5">{{Auth::user()->username}}</h2>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="/admin" class="brand-small text-center"> <strong>D</strong><strong class="text-primary">B</strong></a></div>
        </div>
      

        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Hochzeit</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">                  
                <li><a href="/admin"> <i class="fas fa-home"></i>Dashboard</a></li>  
                <li><a href="/" target="blank"> <i class="fas fa-home"></i>Zur Seite</a></li>
                <li><a href="#InvitationsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="far fa-address-book"></i> Anmeldungen</a>
                    <ul id="InvitationsDropdown" class="collapse list-unstyled ">
                        <li>
                            <a href="{{route('invitations.index')}}">Anmeldungen</a>
                        </li>
                        <li>
                            <a href="{{route('responses.index')}}">Antwort-Möglichkeiten</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li><a href="{{route('contacts.index')}}"> <i class="fas fa-clipboard-list"></i> Anfragen</a></li>
                <li><a href="{{route('guestgifts.index')}}"> <i class="fas fa-gifts"></i> Erhaltene Geschenke</a></li>
            </ul>
            
        </div>
        <div class="admin-menu">
            <h5 class="sidenav-heading">Administration</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">  
                <li><a href="#StoriesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-book"></i> Story</a>
                    <ul id="StoriesDropdown" class="collapse list-unstyled ">
                        <li>
                            <a href="{{route('stories.index')}}">Story</a>
                        </li>
                        <li>
                            <a href="{{route('stories.create')}}">Story erstellen</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li><a href="#ShedulesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-calendar-alt"></i> Zeitplan</a>
                    <ul id="ShedulesDropdown" class="collapse list-unstyled ">
                        <li>
                            <a href="{{route('shedules.index')}}">Zeitplan</a>
                        </li>
                        <li>
                            <a href="{{route('shedules.create')}}">Zeitplan erstellen</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li><a href="#LocationsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-map-marker-alt"></i> Orte</a>
                    <ul id="LocationsDropdown" class="collapse list-unstyled ">
                        <li>
                            <a href="{{route('locations.index')}}">Orte</a>
                        </li>
                        <li>
                            <a href="{{route('locations.create')}}">Ort erstellen</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#AlbumsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-images"></i> Fotoalbum</a>
                    <ul id="AlbumsDropdown" class="collapse list-unstyled ">
                        <li>
                            <a href="{{route('albums.index')}}">Album</a>
                        </li>
                        <li>
                            <a href="{{route('pictures.index')}}">Fotos</a>
                        </li>
                        <li>
                            <a href="{{route('pictures.create')}}">Fotos erstellen</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#TeamsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-user-friends"></i> Trauzeugen</a>
                    <ul id="TeamsDropdown" class="collapse list-unstyled ">
                        <li>
                            <a href="{{route('teams.index')}}">Trauzeugen</a>
                        </li>
                        <li>
                            <a href="{{route('teams.create')}}">Trauzeugen erstellen</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#GiftsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-gifts"></i> Geschenke</a>
                    <ul id="GiftsDropdown" class="collapse list-unstyled ">
                        <li>
                            <a href="{{route('gifts.index')}}">Geschenke</a>
                        </li>
                        <li>
                            <a href="{{route('gifts.create')}}">Geschenk erstellen</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#UsersDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-user"></i> Benutzer</a>
                    <ul id="UsersDropdown" class="collapse list-unstyled ">
                        <li>
                            <a href="{{route('users.index')}}">Benutzer</a>
                        </li>
                        <li>
                            <a href="{{route('users.create')}}">Benutzer erstellen</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
    </div>
</nav>

