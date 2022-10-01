<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = [

    ];

    public function getSatellite(){
        return $this->hasMany('App\Models\Satellite','category_id','id');
    }
}
