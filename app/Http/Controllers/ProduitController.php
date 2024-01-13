<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
//use Symfony\Component\Console\Input\Input;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $liste_produits = Produit::all();
        return view('admin.produits.index', compact('liste_produits'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'NomProduit'=>'required|string|min:1',
            'quantiteStock'=>'required|numeric|min:1',
            'PrixUnitaire'=>'required|integer|min:5',
            'caracteristique'=>'required|min:100',
            //'image'=>'required|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
       /* $nomProduit = $request->input('NomProduit');
        $imageProduit = $request->input('image');
*/
        $categorie = Categorie::where('nomCategorie', $request->input('nomCategorie'))->first();
        //dd($categorie);
        if ($categorie) {
            # code...

            $produit = new Produit();
            $produit->NomProduit= $request->NomProduit;
            $produit->quantiteStock =$request->quantiteStock;
            $produit->PrixUnitaire = $request->PrixUnitaire;
            $produit->image = $request->image;
            $produit->caracteristique =$request->caracteristique;
            $produit->id_categorie =$categorie->id;
            $produit->save();
            //dd($produit);
            return redirect()->route('produits.index');
        } else {
            # code...
            return response()->json(['message' => 'La catégorie n\'existe pas.'], 404);

        }/*

        $produit = Produit::create($request->all());
        //dd($request);


        return redirect()->route('produits.index');*/

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
    public function edit(Produit $produit)
    {
        //
        //$produit = Produit::
        return view('admin.produits.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        //
        $produit->update($request->all());
        return redirect()->route('produits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //
        $produit->delete();
       // dd('ok');
        return redirect()->back();
    }
}
