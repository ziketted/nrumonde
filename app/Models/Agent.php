<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agent extends Model
{

    use HasFactory, SoftDeletes;
    protected $fillable = ['id','numero','nom','sexe','date','lieu_naissance','email'
                        ,'phone','etat_civil','academique','niveau','numerocitoyannete','certificat'
                        ,'nationalite','ville','commune','adresse','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function adresse(){
        return $this->belongsTo(Adresse::class);
    }

    public function affectation(){
        return $this->hasMany(Affectation::class);
    }

    public function formation(){
        return $this->hasMany(Formations::class);
    }

}
