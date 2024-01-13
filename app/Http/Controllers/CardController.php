<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Models\LigneCommande;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\alert;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$produit = Produit::all();
        $cart = Session::get('cart', []);

        $totalAmount = 0;
        //dd($totalAmount);
        foreach ($cart as $product) {
            $totalAmount += $product['quantiteStock'] * $product['PrixUnitaire'];
        }
        Session::put('totalAmount', $totalAmount);

        //dd($totalAmount);
        return view('pages.ventes.panier.card', compact('cart', 'totalAmount'));


        // return view('pages.ventes.panier.index');
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
        $productId = $request->input('product_id');
        $produit = Produit::findOrFail($productId);
        $quantite = $request->input('quantity');
        // Ajoutez ici la logique pour obtenir les détails du produit en fonction de son ID
        //dd($produit);


        //dd($produits);
        $cart = Session::get('cart', []);

        if (isset($cart[$productId])) {
            # code...
            $cart[$productId]['quantiteStock'] += $quantite;
            if($cart[$productId]['quantiteStock']>$produit->quantiteStock){
                alert("Quantité insuffisante");
                $cart[$productId]['quantiteStock'] = $produit->quantiteStock;
            }else{
                $cart[$productId]['quantiteStock'] += $quantite;
            }
        } else {
            # code...
            $cart[$productId] = [
                'id' => $produit->id,
                'NomProduit' => $produit->NomProduit, // Remplacez par le nom réel du produit
                'PrixUnitaire' => $produit->PrixUnitaire, // Remplacez par le prix réel du produit
                'quantiteStock' => $quantite,
            ];
        }

        Session::put('cart', $cart);

        //dd($cart);
        return redirect()->route('ventes.index');
    }

    

    /*
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
    public function destroy(string $productId)
    {
        //
        $cart = Session::get('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }
}
