<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Affectation extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['id','categorie_id','affectation','date','description','agent_id','adresse_id'
    ,'fonction_id','grade_id','numeration_id','structure_id','user_id'];


 public function user(){
        return $this->belongsTo(User::class);
    }

    public function adresse(){
        return $this->belongsTo(Adresse::class);
    }

    public function Agent(){
        return $this->belongsTo(Adresse::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function grade(){
        return $this->belongsTo(Grade::class);
    }
    public function remuneration(){
        return $this->belongsTo(Remuneration::class);
    }
    public function structure(){
        return $this->belongsTo(Structure::class);
    }

}
