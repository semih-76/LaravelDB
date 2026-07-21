<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['id', 'titre', 'type', 'statut', 'emprunteur', 'createdat', 'updatedat'])]
class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 'type', 'statut', 'emprunteur'
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}


