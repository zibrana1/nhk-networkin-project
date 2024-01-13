@extends('admin.layouts.app' ,['activePage' => 'Produits', 'title' => ' NHK networking', 'navName' 
=>'Page Produit/edit', 'activeButton' => 'laravel'])
@section('content')
<div class="container">
    <h2 class="mt-5">Mettre à jour Un produit</h2>
    <form action="{{ route('produits.update', $produit)}}" method="POST">
    @csrf
    @method("PUT")
        <div class="form-group">
            <label for="nom">Nom du Produit :</label>
            <input type="text" class="form-control" id="nom" name="NomProduit" value="{{ old('NomProduit',$produit->NomProduit)}}"  required>
        </div>

        <div class="form-group">
            <label for="quantite">Quantité :</label>
            <input type="number" class="form-control" id="quantite" name="quantiteStock"  value="{{ old('quantiteStock', $produit->quantiteStock)}}" required>
        </div>

        <div class="form-group">
            <label for="price">Prix de vente:</label>
            <input type="number" class="form-control" id="price" name="PrixUnitaire" value="{{ old('PrixUnitaire', $produit->PrixUnitaire)}}"  required>
        </div>

        <div class="form-group">
            <label for="img">Image :</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ old('image', $produit->image)}}"  required>
        </div>

        <div class="form-group">
            <label for="caracteristique">Description :</label>
            <textarea name="caracteristique" id="caracteristique" cols="30" rows="10" class="form-control">{{ old('caracteristique', $produit->caracteristique)}} </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection