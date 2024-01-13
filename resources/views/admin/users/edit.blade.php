@extends('admin.layouts.app', ['activePage' => 'Gestion employé', 'title' => 'NHK networking', 'navName' 
=>'Employers/edit', 'activeButton' => 'laravel'])
@section('content')
<div class="container">
    <h2 class="mt-5">Mise à jour d'un Employer</h2>
    <form action="{{ route('users.update', $employer)}}" method="POST">
     @csrf
     @method("PUT")
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{old('nom', $employer->nom)}}" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom', $employer->prenom)}}"  required>
        </div>

        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse', $employer->adresse)}}"  required>
        </div>

        <div class="form-group">
            <label for="status"> Status :</label>
            <input type="text" name="status" id="status" value="{{ old('status', $employer->status)}} " required>
        </div>

        <div class="form-group">
            <label for="telephone">Numéro de Téléphone :</label>
            <input type="number" class="form-control" id="telephone" name="contact" value="{{ old('contact', $employer->contact)}}"  required>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection