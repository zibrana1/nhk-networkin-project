@extends('pages.ventes.base')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Contenu de Votre Panier </h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('ventes.index')}} " class="btn btn-secondary">Retour</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nom du Produit</th>
                <th>Quantité</th>
                <th>Prix Unitaire</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cart as $productId => $item)
                <tr>
                    <td>{{ $item['NomProduit'] }}</td>
                    <td>{{ $item['quantiteStock']}} </td>
                    <td>{{ $item['PrixUnitaire'] }} FCFA</td>
                    <td>
                        <form action="{{ route('cart.destroy',  $productId) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="color:red;">Votre panier est vide.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
<div class="mt-3">
    <h2>Total à Payer : <span style="color: red;">{{ Session::get('totalAmount') }}</span> FCFA </h2>
</div>
<div class="mt-4">
    <h4>Choisissez votre méthode de paiement :</h4>

    <form action="{{ route('paypal') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">Paypal</button>
    </form>
    <form action="{{ route('paiement') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">TmoneyOrFlooz</button>
    </form>

</div>

@endsection

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
