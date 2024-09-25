<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Structure extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['id','departement','descrption','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function affectation(){
        return $this->hasMany(Affectation::class);
    }
}
