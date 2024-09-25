<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formations extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['id','lieu','date','formation','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function formationAgent(){
        return $this->hasMany(related: Agent::class);
    }
}
