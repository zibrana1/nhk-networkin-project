<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/logo1_nhkNetworking.jpeg') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo1_nhkNetworking.jpeg') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Gestion de l'entreprise</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('admin/css/demo.css') }}" rel="stylesheet" />

    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/light-bootstrap-dashboard-laravel" />
    <!--  Social tags      -->
    <!--meta name="keywords"
        content="design system, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, light bootstrap, light bootstrap dashboard, creative tim,updivision, html dashboard, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap dashboard, responsive dashboard, laravel, laravel php, laravel php framework, free laravel admin template, free laravel admin, free laravel admin template + Front End + CRUD, crud laravel php, crud laravel, laravel backend admin dashboard"-->
    <!--meta name="description"
        content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up."-->


    <!-- Schema.org markup for Google+ -->
    <!--meta itemprop="name" content="Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION"-->
    <!--meta itemprop="description"
        content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up."-->

    <!--meta itemprop="image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/213/opt_lbd_laravel_thumbnail.jpg"-->

    <!-- Twitter Card data -->
    <!--meta name="twitter:card" content="product">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION">

    <meta name="twitter:description"
        content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up.">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/213/opt_lbd_laravel_thumbnail.jpg"-->

    <!-- Open Graph data -->
    <!--meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.creative-tim.com/live/light-bootstrap-dashboard-laravel" />
    <meta property="og:image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/213/opt_lbd_laravel_thumbnail.jpg" />
    <meta property="og:description"
        content="Start your development with a Bootstrap 4 Admin Dashboard built for Laravel Framework 5.5 and Up." />
    <meta property="og:site_name" content="Creative Tim & UPDIVISION" /-->
    <!-- Google Tag Manager -->
    <!--script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </!script-->
    <!-- End Google Tag Manager -->

    <!--script>
        // Facebook Pixel Code Don't Delete
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');
        try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");
        } catch (err) {
            console.log('Facebook Track Error:', err);
        }
    </!script-->
</head>


<body class="clickup-chrome-ext_installed">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
    </noscript>

    <div class="wrapper ">

        <div class="sidebar" data-image="{{ asset('admin/img/sidebar-5.jpg') }}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        
        Tip 2: you can also add an image using data-image tag
        -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href=" {{ route('acceuil')}}" class="simple-text">
                        {{ __('NHK Networking') }}
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <i class="nc-icon nc-bullet-list-67"></i>
                            <p>{{ __('Tableau de bord') }}</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#laravelExamples" aria-expanded="true">
                            <i style="font-size: 2rem" class="fa fa-id-card"> </i>
                            <p>
                                {{ __('Utilisateurs') }}
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse  show " id="laravelExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{-- route('profile.edit') --}}">
                                        <i class="nc-icon nc-single-02"></i>
                                        <p>{{ __(' Profile') }}</p>
                                    </a>
                                </li>
                                <li class="nav-item  active">
                                    <a class="nav-link" href="{{ route('users.index') }}">
                                        <i class="nc-icon nc-circle-09"></i>
                                        <p>{{ __('Gestion Employé') }}</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('clients.index') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>{{ __('Clients') }}</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('produits.index') }}">
                            <i class="nc-icon nc-tv-2"></i>
                            <p>{{ __('Produits') }}</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('commandes.index')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>{{ __('Commandes') }}</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{-- route('page.index', 'maps') --}}">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>{{ __('Maps') }}</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{route('page.index', 'notifications')}}">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>{{ __("Notifications") }}</p>
                        </a>
                    </li> --}}
                    <!--li class="nav-item">
                        <a class="nav-link active bg-danger" href="{{-- route('page.index', 'upgrade') --}}">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>{{-- __('Upgrade to PRO') --}}</p>
                        </a>
                    </li-->
                </ul>
            </div>
        </div>
        <div class="fixed-plugin">
            <div class="dropdown show-dropdown">
                <a href="#" data-toggle="dropdown">
                    <i class="fa fa-cog fa-2x"> </i>
                </a>
                <ul class="dropdown-menu">
                    <li class="header-title"> Sidebar Style</li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger">
                            <p>Background Image</p>
                            <label class="switch">
                                <div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate"
                                    style="width: 72px;">
                                    <div class="bootstrap-switch-container" style="width: 122px; margin-left: 0px;">
                                        <span class="bootstrap-switch-handle-on bootstrap-switch-primary"
                                            style="width: 50px;">ON</span><span class="bootstrap-switch-label"
                                            style="width: 30px;">&nbsp;</span><span
                                            class="bootstrap-switch-handle-off bootstrap-switch-primary"
                                            style="width: 50px;">OFF</span><input type="checkbox"
                                            data-toggle="switch" checked="" data-on-color="primary"
                                            data-off-color="primary"></div>
                                </div>
                                <span class="toggle"></span>
                            </label>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger background-color">
                            <p>Filters</p>
                            <div class="pull-right">
                                <span class="badge filter badge-black" data-color="black"></span>
                                <span class="badge filter badge-azure" data-color="azure"></span>
                                <span class="badge filter badge-green" data-color="green"></span>
                                <span class="badge filter badge-orange" data-color="orange"></span>
                                <span class="badge filter badge-red" data-color="red"></span>
                                <span class="badge filter badge-purple active" data-color="purple"></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="header-title">Sidebar Images</li>
                    <li class="active">
                        <a class="img-holder switch-trigger" href="javascript:void(0)">
                            <img src="{{ asset('admin/img/sidebar-1.jpg') }}" alt="" />
                        </a>
                    </li>
                    <li>
                        <a class="img-holder switch-trigger" href="javascript:void(0)">
                            <img src="{{ asset('admin/img/sidebar-3.jpg') }}" alt="" />
                        </a>
                    </li>
                    <li>
                        <a class="img-holder switch-trigger" href="javascript:void(0)">
                            <img src="{{ asset('admin/img/sidebar-4.jpg') }}" alt="" />
                        </a>
                    </li>
                    <li>
                        <a class="img-holder switch-trigger" href="javascript:void(0)">
                            <img src="{{ asset('admin/img/sidebar-5.jpg') }}" alt="" />
                        </a>
                    </li>
                    <!--li class="button-container">
                        <div class="">
                            <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-laravel"
                                target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                        </div>
                    </!li>
                    <li class="button-container">
                        <div class="">
                            <a href="https://light-bootstrap-dashboard-laravel.creative-tim.com/docs/tutorial-components.html"
                                target="_blank" class="btn btn-default btn-block btn-fill">View Documentation</a>
                        </div>
                    </li>
                    <li class="header-title pro-title text-center">Want more components?</li>
                    <li class="button-container">
                        <div class="">
                            <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro-laravel"
                                target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                        </div>
                    </li>
                    <li-- class="header-title" id="sharrreTitle">Thank you for sharing!</li-->
                    <li class="button-container">
                        <button id="twitter"
                            class="btn btn-social btn-outline btn-twitter btn-round sharrre twitter-sharrre"><i
                                class="fa fa-twitter"></i>· 256</button>
                        <button id="facebook"
                            class="btn btn-social btn-outline btn-facebook btn-round sharrre facebook-sharrre"><i
                                class="fa fa-facebook-square"></i>· 426</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class=" main-panel ">
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button"
                        data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">{{ __('Tableau de Bord') }}</span>
                                </a>
                            </li>
                            <!--li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">{{-- __('Notification') --}}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">{{-- __('Notification 1') --}}</a>
                                    <a class="dropdown-item" href="#">{{-- __('Notification 2') --}}</a>
                                    <a class="dropdown-item" href="#">{{-- __('Notification 3') --}}3</a>
                                    <a class="dropdown-item" href="#">{{-- __('Notification 4') --}}</a>
                                    <a class="dropdown-item" href="#">{{-- __('Another notification') --}}</a>
                                </ul>
                            </li-->
                            {{--<form class="form-inline">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Rechercher...">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>--}}
                            {{--<li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;{{ __('Search') }}</span>
                                </a>
                            </li>--}}
                        </ul>
                        <ul class="navbar-nav   d-flex align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href=" {{--route('profile.edit') --}} ">
                                    <span class="icon user-select-all">{{ __('Compte') }}</span>
                                </a>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">{{ __('Dropdown') }}</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">{{ __('Action') }}</a>
                                    <a class="dropdown-item" href="#">{{ __('Another action') }}</a>
                                    <a class="dropdown-item" href="#">{{ __('Something') }}</a>
                                    <a class="dropdown-item" href="#">{{ __('Something else here') }}</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">{{ __('Separated link') }}</a>
                                </div>
                            </li> --}}
                            <li class="nav-item">
                                <form id="logout-form" action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <a class="text-danger" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }} </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
            <footer class="footer">
                <div class="container -fluid ">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="{{ route('acceuil')}}" class="nav-link" target="_blank">NHK networking</a>
                            </li>
                            <li>
                                <a href="{{ route("A propos")}}" class="nav-link" target="_blank">A Propos de nous</a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">NHK networking</a> &amp; , made by ZIBRANA 1er&
                            Soumichou
                        </p>
                    </nav>
                </div>
            </footer>
        </div>

    </div>




    <!--   Core JS Files   -->
    <script src="{{ asset('admin/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/core/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('admin/js/plugins/jquery.sharrre.js') }}"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('admin/js/plugins/bootstrap-switch.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src="{{ asset('admin/js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('admin/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="{{ asset('admin/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('admin/js/demo.js') }}"></script>
    @stack('js')
    <script>
        $(document).ready(function() {

            $('#facebook').sharrre({
                share: {
                    facebook: true
                },
                enableHover: false,
                enableTracking: false,
                enableCounter: false,
                click: function(api, options) {
                    api.simulateClick();
                    api.openPopup('facebook');
                },
                template: '<i class="fab fa-facebook-f"></i> Facebook',
                url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
            });

            $('#google').sharrre({
                share: {
                    googlePlus: true
                },
                enableCounter: false,
                enableHover: false,
                enableTracking: true,
                click: function(api, options) {
                    api.simulateClick();
                    api.openPopup('googlePlus');
                },
                template: '<i class="fab fa-google-plus"></i> Google',
                url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
            });

            $('#twitter').sharrre({
                share: {
                    twitter: true
                },
                enableHover: false,
                enableTracking: false,
                enableCounter: false,
                buttons: {
                    twitter: {
                        via: 'CreativeTim'
                    }
                },
                click: function(api, options) {
                    api.simulateClick();
                    api.openPopup('twitter');
                },
                template: '<i class="fab fa-twitter"></i> Twitter',
                url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
            });
        });
    </script>

</html>
