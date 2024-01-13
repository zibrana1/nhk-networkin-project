<div class="sidebar" data-image="{{ asset('admin/img/sidebar-5.jpg') }}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                {{ __("NHK networking") }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{--route('dashboard')--}}">
                    <i class="nc-icon nc-bullet-list-67"></i>
                    <p>{{ __("Tableau de bord") }}</p>
                </a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laravelExamples" @if($activeButton =='laravel') aria-expanded="true" @endif>
                    <i style="font-size: 2rem"  class="fa fa-id-card"> </i>
                    <p>
                        {{ __('Utilisateurs') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse @if($activeButton =='laravel') show @endif" id="laravelExamples">
                    <ul class="nav">
                        <li class="nav-item @if($activePage == 'user') active @endif">
                            <a class="nav-link" href="{{--route('users.edit', $employe)--}}">
                                <i class="nc-icon nc-single-02"></i>
                                <p>{{ __(" Profile") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{route('users.index')}}">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>{{ __("Users") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item @if($activePage == 'clients') active @endif">
                <a class="nav-link" href="{{route('clients.index')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>{{ __("Clients") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'produits') active @endif">
                <a class="nav-link" href="{{route('produits.index')}}">
                    <i class="nc-icon nc-tv-2"></i>
                    <p>{{ __("Produits") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'commandes') active @endif">
                <a class="nav-link" href="{{route('commandes.index')}}">
                    <i class="fa fa-shopping-cart"></i>
                    <p>{{ __("Commandes") }}</p>
                </a>
            </li>
            {{--<li class="nav-item @if($activePage == 'maps') active @endif">
                <a class="nav-link" href="{{--route('page.index', 'maps')}}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __("Maps") }}</p>
                </a>
            </li>--}}
            {{--<li class="nav-item @if($activePage == 'notifications') active @endif">
                <a class="nav-link" href="{{route('page.index', 'notifications')}}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __("Notifications") }}</p>
                </a>
            </li>--}}
        </ul>
    </div>
</div>
