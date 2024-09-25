<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Remuneration extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['id','libelle','montant','description','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function affection(){
        return $this->belongsTo(Affectation::class);
    }
}
