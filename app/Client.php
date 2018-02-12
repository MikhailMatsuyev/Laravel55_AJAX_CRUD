<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'first_name', 'last_name'
    ];

    public function reclases()
    {
        return $this->belongsToMany('App\Reclas');
    }

}
