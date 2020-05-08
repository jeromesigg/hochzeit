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
            </ul>
        </div>
    </div>
</nav>

