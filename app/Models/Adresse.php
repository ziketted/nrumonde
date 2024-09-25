<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adresse extends Model
{

    use HasFactory, SoftDeletes;
    protected $fillable = ['id','region','sousregion','pays','ville','description','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function agentAdresse(){
        return $this->hasMany(Agent::class);
    }

    public function adresseAffecation(){
        return $this->hasMany(Affectation::class);
    }
}

