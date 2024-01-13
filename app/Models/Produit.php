<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Produit extends Model
{
    use HasFactory;

    protected $fillable =[
        'NomProduit',
        'image',
        'PrixUnitaire',
        'quantiteStock',
        'DateEngis',
        'caracteristique',
        //'id_categorie',
    ];

    public function Categorie():HasOne{
        return $this->hasOne(Categorie::class);
    }
}
