<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LigneCommande extends Model
{
    use HasFactory;

    protected $fillable =[
        'NomProduit',
        'Qte',
        'PrixVenteUnitaire',
        'DateVente',
        'remise',
        'id_produit',
    ];

    public function Produit():BelongsTo{
        return $this->belongsTo(Produit::class);
    }

    public function Commande():HasMany{
        return $this->hasMany(Commande::class);
    }
}
