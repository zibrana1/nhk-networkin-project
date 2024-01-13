@extends('pages.ventes.base')
@section('content')
    <div class="container">
        <div class="row">
            <!-- Exemple de boucle pour afficher plusieurs produits -->
            @forelse($liste_produits as $produit)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/{{ $produit->image }}" class="card-img-top" alt="Image du produit">
                        <div class="card-body">
                            <h2 class="card-title">{{ $produit->NomProduit }} </h2>
                            <h3 class="card-subtitle" style="color: green"> {{ $produit->quantiteStock }} Disponible</h3>
                            <h1>Caractéristiques</h1>
                            <p class="card-text">{{ $produit->caracteristique }}</p>
                            <p id="price" style="font-size: 15px; font-style:italic; font-weight:bold">Prix :<span
                                    style="color: green; font-size:15px">{{ $produit->PrixUnitaire }} FCFA
                                    </ span>
                            </p>
                            <form action="{{ route('cart.store',$produit) }}" method="post">
                                @csrf
                                <input type="hidden" name='product_id' value="{{ $produit->id }}">
                                <label for="">Quantité: </label>
                                <select name="quantity" id="quantity">
                                    @for($i=1; $i<= $produit->quantiteStock; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <button type="submit" class="read_more">Ajouter au
                                    Panier</button>
                            </form>
                            <a href="https://api.whatsapp.com/send?phone=90788142" class="btn btn-custom"><i
                                    class="fa fa-whatsapp"></i>Commander Par Whatsapp</a>
                        </div>
                    </div>
                </div>
            @empty
                <h1>Aucun produit n'est enregistré</h1>
            @endforelse
        </div>

    </div>

@endsection
