<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scientist extends Model
{
    use HasFactory;

    protected $table = "scientists";

    protected $fillable = [

    ];

    public function getSatellite(){
        return $this->hasMany('App\Models\Satellite','scientist_id','id');
    }
}

