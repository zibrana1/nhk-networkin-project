@extends('admin.layouts.app' ,['activePage' => 'Clients', 'title' => ' NHK networking', 'navName' 
=>'Page client/edit', 'activeButton' => 'laravel'])
@section('content')
<div class="container">
    <h2 class="mt-5">Mise à jour d'un client</h2>
    <form action="{{ route('clients.update', $client)}}" method="POST">
     @csrf
     @method("PUT")
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{old('nom', $client->nom)}}" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom', $client->prenom)}}"  required>
        </div>

        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse', $client->adresse)}}"  required>
        </div>

        <div class="form-group">
            <label for="telephone">Numéro de Téléphone :</label>
            <input type="number" class="form-control" id="telephone" name="contact" value="{{ old('contact', $client->contact)}}"  required>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection