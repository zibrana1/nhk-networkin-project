<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Illuminate\Database\Eloquent\Relations\HasOne;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable =[
        'nomCategorie',
        'id_produit',
    ];

    public function Produit():BelongsTo{
        return $this->belongsTo(Produit::class);
    }
}
