@extends('pages.ventes.base')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1 class="mt-4">Panier</h1>
            <a href="{{ route('ventes.index')}}" class="btn btn-primary "><i class="fa fa-arrow-left"></i> Back</a>
        </div>
        <ul class="list-group">
            @forelse ($ligneCommandes as $ligneCommande)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-6">{{ $ligneCommande->NomProduit }}</div>
                        <div class="col-md-3">Quantité: {{ $ligneCommande->Qte }}</div>
                        <div class="col-md-3">Prix: {{ $ligneCommande->PrixVenteUnitaire }}</div>
                    </div>
                </li>
        </ul>

    @empty
        <p>Votre panier est vide.</p>
        @endforelse
        <div class="mt-4">
            <h2>Total à payer : </h2>
            <h4>Choisissez votre méthode de paiement :</h4>
            <a href="#" class="btn btn-primary"><i class="fa fa-paypal"></i> PayPal</a>
            <a href="#" class="btn btn-primary"><i class="fa fa-credit-card"></i> Carte bancaire</a>
            <a href="#" class="btn btn-primary"><i class="fa fa-mobile-alt"></i> Flooz</a>
            <a href="tel:90788142" class="btn btn-primary"><i class="fa fa-mobile-alt"></i> T-Money</a>
        </div>
    </div>
@endsection

<style>
    .container {
        height: 80%;
    }
    h2{
        text-transform: uppercase;
    }
    .d-flex a {
        height: 30px;
        margin-top: 7px;
    }
</style>
