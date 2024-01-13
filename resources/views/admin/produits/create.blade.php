@extends('admin.layouts.app' ,['activePage' => 'produits', 'title' => ' NHK networking', 'navName'
=>'Page Produit/create', 'activeButton' => 'laravel'])
@section('content')
<div class="container">
    <h2 class="mt-5">Enregistrement des Produits</h2>
    <form action="{{ route('produits.store')}}" method="POST">
    @csrf
        <div class="form-group">
            <label for="categorie">Catégorie :</label>
            <select name="nomCategorie" id="categorie" class="form-control">
                <option value="ordinateur">ordinateur</option>
                <option value="clavier">clavier</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nom">Nom du Produit :</label>
            <input type="text" class="form-control @error('NomProduit')
                is-invalid
            @enderror" id="nom" name="NomProduit" >
        </div>
        @error('NomProduit')
            <div class="alert alert-danger"> {{ $message}} </div>
        @enderror

        <div class="form-group">
            <label for="quantite">Quantité :</label>
            <input  class="form-control @error('quantiteStock')
                is-invalid
            @enderror" id="quantite" name="quantiteStock"  >
        </div>
        @error('quantiteStock')
            <div class="alert alert-danger">{{ $message}} </div>
        @enderror

        <div class="form-group">
            <label for="price">Prix de vente:</label>
            <input  class="form-control @error('PrixUnitaire')
                is-invalid
            @enderror" id="price" name="PrixUnitaire"  step="1000" >
        </div>
        @error('PrixUnitaire')
            <div class="alert alert-danger">{{ $message}} </div>
        @enderror

        <div class="form-group">
            <label for="img">Image :</label>
            <input type="file" class="form-control @error('image')
                is-invalid
            @enderror" id="image" name="image" required>
        </div>
        @error('image')
            <div class="alert alert-danger">{{ $message}} </div>
        @enderror

        <div class="form-group">
            <label for="caracteristique">Description :</label>
            <textarea name="caracteristique" id="caracteristique" cols="30" rows="10" class="form-control"> Décrire les caractéristiques des produits ici...</textarea>
        </div>
        <button type='submit' class="btn btn-primary">Save</button>
    </form>
</div>
<script>
    function afficheImage(event){
        let entrer = event.target;
        let reader = new FileReader();
        reader.onload = function(){
            let dataUrl  = reader.result;
            let output = document.getElementById('image');
            output.src = dataUrl;
        }
        reader.readerAsDataUrl(entrer.files[0]);
    }
</script>

@endsection
