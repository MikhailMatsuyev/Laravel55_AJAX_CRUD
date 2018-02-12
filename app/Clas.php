<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    protected $table = 'clases';
    protected $fillable = [
        'name'
    ];

    public function recClas()
    {
        return $this->hasMany('App\Song');
    }
}
