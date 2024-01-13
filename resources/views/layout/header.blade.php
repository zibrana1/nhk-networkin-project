<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('acceuil')}} ">
                <img src="{{ asset('images/logo1_nhknetworking.jpeg') }}" alt="NHK networking" width="80px" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
                aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button><link rel="icon" type="image/jpeg" href="{{  asset('images/logo1_nhknetworking.jpeg')  }}">
            <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Route::currentRouteName() === 'accueil' ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('acceuil')}}">Accueil</a></li>
                    <li
                        class="nav-item dropdown  {{ Str::startsWith(Route::currentRouteName(), 'vente') ? 'active' : '' }}">
                        <a class="nav-link " id="dropdown-a" href="#">Service </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="#">Maintenance </a>
                            <a class="dropdown-item" href="{{ route('vente')}}">Vente des matériels informatique </a>
                        </div>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() === 'A propos' ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('A propos')}}">A propos</a></li>

                    <li class="nav-item {{ Route::currentRouteName() === 'contact' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact')}}">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="hover-btn-new log orange" href="{{ route('authentification')}}"><span>Se connecter</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
