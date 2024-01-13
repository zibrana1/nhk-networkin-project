<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
    ];

    public function Produit():HasOne{
        return $this->hasOne(Produit::class);
    }

    public function Commande():HasOne{
        return $this->hasOne(Commande::class);
    }

    public function User():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
