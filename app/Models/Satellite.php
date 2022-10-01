<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satellite extends Model
{
    use HasFactory;

    protected $table = "satellites";

    protected $fillable = [

    ];

    public function getCategory(){
        return $this->belongsTo('App\Models\Category','category_id','id');
    }

    public function getScientist(){
        return $this->belongsTo('App\Models\Scientist','scientist_id','id');
    }

    public function getStatu(){
        return $this->belongsTo('App\Models\Status','status_id','id');
    }

    public function getLaunchpad(){
        return $this->belongsTo('App\Models\LaunchPad','launch_id','id');
    }
}
