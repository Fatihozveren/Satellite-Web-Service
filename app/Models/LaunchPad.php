<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaunchPad extends Model
{
    use HasFactory;

    protected $table = "launchpad";

    protected $fillable = [

    ];

    public function getSatellite(){
        return $this->hasOne('App\Models\Satellite','launch_id','id');
    }
}
