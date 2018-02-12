<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclas extends Model
{
    protected $fillable = ['clas_date','clas_id','clas_start_time', 'clas_duration', 'clas_start_date', 'clas_end_date'];
    protected $table = 'reclases';

    public function clients()
    {
        return $this->belongsToMany('App\Client');
    }
}
