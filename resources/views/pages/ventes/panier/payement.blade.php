@extends('pages.ventes.base')
@section('content')

<form action="{{ route('paypal')}}" method="POST">
    @csrf

<div class="container">
    <div class="form-group">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nomClient" class="form-control">
    </div>
    <div class="form-group">
        <label for="nom">Prenom : </label>
        <input type="text" name="prenom" id="prenomClient" class="form-control">
    </div>
    <div class="form-group">
        <label for="nom">Adresse : </label>
        <input type="text" name="adresse" id="adresseClient" class="form-control">
    </div>
    <div class="form-group">
        <label for="nom">Telephone : </label>
        <input type="tel" name="telephone" id="telephoneClient" class="form-control">
    </div>



        <label for="amount">Montant à Payer :</label>
        <input style="font-weight: 700;" type="text" name="amount" id="amount" value="{{ Session::get('totalAmount') }}FCFA">

        <!-- Autres champs et détails de paiement à inclure ici selon les besoins -->

        <button type="submit" class="btn btn-primary">Continuer</button>
    </form>
    <a href="{{ route('cart.index')}}"><button class="btn btn-danger">Annuler</button></a>

</div>


@endsection

