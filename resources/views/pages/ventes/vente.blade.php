@extends('pages.ventes.base')
@section('content')
    <style>
        .product-card {
          border: none;
            padding: 10px;
            margin: 20px;
            text-align: center;
        }

        h1 {
            text-align: center;
            font-style: italic;
            font-weight: 800;
            margin-top: 10%;
            text-decoration: underline orange 5px;
        }

        h4 {
            text-transform: uppercase;
            font-size: 20px;
            font-style: italic;
            font-weight: 700;
        }
    </style>
    <div class="container">
        <h1>Nos Produits</h1>

        <div class="row">
            <!-- Exemple de produit -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="{{ asset('images/produit6.png') }}" class="img-fluid" alt="Image produit 1">
                    <h4>Ordinateur</h4>
                    <a href="{{ route('ventes.index') }}" class="btn btn-primary">Voir plus <i class="fa fa-caret-right"></i></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-card">
                    <img src="{{ asset('images/product2.png') }}" class="img-fluid" alt="Image produit 2">
                    <h4>Souris</h4>
                    <a href="#" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="{{ asset('images/unite_centrale.jpg') }}" alt="Unité centrale" class="img-fluid">
                    <h4>Unité centrale</h4>
                    <a href="#" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
            <div class="col-md-4">
              <div class="product-card">
                <img src="{{ asset('images/cle_usb.jpg')}}" alt="USB" class="img-fluid">
                <h4>Clé USB</h4>
                <a href="#" class="btn btn-primary">Voir plus</a> 
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-card">
                <img src="{{ asset('images/wifi.jpg')}}" alt="Routeur" class="img-fluid">
                <h4>Routeur</h4>
                <a href="#" class="btn btn-primary">Voir plus</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-card">
                <img src="{{ asset('images/clavier.jpg')}}" alt="clavier" class="img-fluid">
                <h4>Clavier</h4>
                <a href="#" class="btn btn-primary">Voir plus</a>
              </div>
            </div>
        </div>
    </div>
@endsection
