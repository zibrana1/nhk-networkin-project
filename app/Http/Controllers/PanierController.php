<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Models\LigneCommande;
use Illuminate\Support\Carbon;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ligneCommandes = LigneCommande::all();
        return view('pages.ventes.panier.index', compact('ligneCommandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Produit $produit)
    {
        //  // Récupérer les détails du produit
        $produit_id = $request->input('product_id');
        $produit = Produit::findOrFail($produit_id);

       // dd($produit_id);
        /*$ligneCommande = LigneCommande::create([
      "NomProduit"=$produit->NomProduit;
  ]);*/
        // Enregistrer la ligne de commande
        $ligneCommande = new LigneCommande();
        $ligneCommande->NomProduit = $produit->NomProduit;
        $ligneCommande->Qte = 1;
        $ligneCommande->PrixVenteUnitaire = $produit->PrixUnitaire;
        $ligneCommande->DateVente = Carbon::now();
        $ligneCommande->id_produit =$produit_id;
        $ligneCommande->save();


        /*$commande = new Commande();
        $commande->DateCmde = Carbon::now();
        $commande->montant = */
        return redirect()->route('ventes.index')->with('message', 'Produit ajouté au panier avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    /*public function ajouterAuPanier(Request $request, Produit $produit_id)
    {
        // Récupérer les détails du produit
        $produit_id = $request->input('product_id');
        $produit = Produit::findOrFail($produit_id);

        /*$ligneCommande = LigneCommande::create([
            "NomProduit"=$produit->NomProduit;

        ]);

        // Enregistrer la ligne de commande
        $ligneCommande = new LigneCommande();
        $ligneCommande->NomProduit = $produit->NomProduit;
        $ligneCommande->Qte=$produit->quantiteStock;
        $ligneCommande->PrixVenteUnitaire = $produit->PrixUnitaire;
        $ligneCommande->DateVente = now();
        $ligneCommande->id_produit = $produit->$produit_id;
        $ligneCommande->save();

        return redirect()->route('panier')->with('success', 'Produit ajouté au panier avec succès.');
}
*/
}
