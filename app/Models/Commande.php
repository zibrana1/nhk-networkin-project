<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;


    protected $fillable =[
        'DateCmde',
        'status',
        'montant',
        'methodPayement',
    ];

    public function Client():BelongsTo{
        return $this->belongsTo(Client::class);
    }

    public function LigneCommande():HasMany{
        return $this->hasMany(LigneCommande::class);
    }
}
