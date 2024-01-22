@extends('app')
@section('content')
    <div id="banner1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner1" data-slide-to="0" class="active"></li>
            <li data-target="#banner1" data-slide-to="1"></li>
            <li data-target="#banner1" data-slide-to="2"></li>
            <li data-target="#banner1" data-slide-to="3"></li>
            <li data-target="#banner1" data-slide-to="4"></li>
            <li data-target="#banner1" data-slide-to="5"></li>
            <li data-target="#banner1" data-slide-to="6"></li>
            <li data-target="#banner1" data-slide-to="7"></li>
            <li data-target="#banner1" data-slide-to="8"></li>
            <li data-target="#banner1" data-slide-to="8"></li>
            <li data-target="#banner1" data-slide-to="9"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <span>Les ordinateurs</span>
                                    <h1>Caractéristiques</h1>
                                    <p> <strong>HP Laptop 15s-fq2133nia (80Q86EA) </strong><br>
                                        &bull; FreeDOS<br>
                                        &bull;Intel® Core™ i3 1115G4 1 2 <br>
                                        &bull;4 GB DDR4 <br>
                                        &bull;256 GB SSD <br>
                                        &bull;15.6" HD <br>
                                        &bull;Battery life: Up to 8 hours and 30 minutes 3
                                    </p>
                                    <a class="voir-plus" href="{{ route('login') }}">S'incrire pour Voir Plus </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{ asset('images/hp.png') }}" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="nav navbar-nav navbar-right inscrire">
                    <a href="#" class="hover-btn-new log orange">S'incrire</a>
                </div> --}}
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <span>Unité centrale</span>
                                    <h1>Caractéristique</h1>
                                    <p><strong>HP Pro Tower 290 G9 Desktop PC Bundle (6B2X2EA) </strong><br>
                                        &bull;FreeDOS <br>
                                        &bull;Intel® Core™ i5 12400 1 2 <br>
                                        &bull;16 GB DDR4 <br>
                                        &bull;512 GB SSD <br>
                                    </p>
                                    <a class="voir-plus" href="{{ route('login') }}">S'incrire pour Voir Plus </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{ asset('images/unite_centrale.png') }}" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <span>Le clavier</span>
                                    <h1>Caractéristiques</h1>
                                    <p><strong>HP 460 Multi-Device Bluetooth Keyboard (7N7B8AA) </strong><br>
                                        Be anywhere and still be ready to go. The HP 460 Bluetooth Keyboard offers
                                        full-featured functionality with easy-to-pack-up portability to go wherever life
                                        takes you. <br>
                                        Weight: 660 g <br>
                                        Minimum dimensions (W x D x H): 376 x 153 x 19 mm <br>
                                        What's in the box: Wireless keyboard; 2 x AAA batteries; Quick start guide; Warranty card; R.E.D. Card (EMEA only)
                                    </p>
                                    <a class="voir-plus" href="{{ route('login') }}">S'incrire pour Voir Plus </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{ asset('images/clavier.png') }}" alt="#" /></ figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <span>La souris</span>
                                    <h1>Caractéristiques</h1>
                                    <p><strong>HP 240 Black Bluetooth Mouse (3V0G9AA) </strong><br>
                                        Strong connection and fast tracking will keep you clicking all day, every day. <br>
                                        &bull;Weight: 0.0542 kg <br>
                                        &bull;Minimum dimensions (W x D x H): 107 x 60.5 x 29.31 mm <br>
                                        &bull;What's in the box: Wirelesss Mouse; Quick Start Guide; Warranty Card; 1 x AA battery
                                    </p>
                                    <a class="voir-plus" href="{{ route('login') }}">S'incrire pour Voir Plus </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{ asset('images/souris2.png') }}" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <span>La caméra</span>
                                    <h1>Caractéristiques</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Mollitia commodi, optio magnam, repellendus eveniet porro a
                                        corporis quis eligendi harum nesciunt beatae fuga iure veritatis
                                        blanditiis error vel ab laboriosam! </p>
                                        <a class="voir-plus" href="{{ route('login') }}">S'incrire pour Voir Plus </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{ asset('images/product3.png') }}" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <span>Le Haut parleur</span>
                                    <h1>Caractéristiques</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi maxime quisquam
                                        fugareiciendis ipsa cupiditate expedita sequi assumenda numquam! Saepe quod
                                        reiciendiseaque officia recusandae delectus vel impedit unde ipsam? </p>
                                        <a class="voir-plus" href="{{ route('login') }}">S'incrire pour Voir Plus </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{ asset('images/product4.png') }}" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <span>Le disque dure</span>
                                    <h1>Caractéristiques</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Quasi maxime quisquam fuga reiciendis ipsa cupiditate expeditasequi assumenda
                                        numquam! Saepe quod reiciendis eaque officia recusandae delectus vel impedit unde
                                        ipsam? </p>
                                        <a class="voir-plus" href="{{ route('login') }}">S'incrire pour Voir Plus </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{ asset('images/product6.png') }}" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <span>La Battérie</span>
                                    <h1>Caractéristiques</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Quasi maxime quisquam fuga reiciendis ipsa cupiditate expedita sequi assumenda
                                        numquam! Saepe quod reiciendis eaque officia recusandae delectus vel impedit unde
                                        ipsam? </p>
                                        <a class="voir-plus" href="{{ route('login') }}">S'incrire pour Voir Plus </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{ asset('images/product8.png') }}" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </div>
@endsection
@push('js')
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }} "></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@endpush
