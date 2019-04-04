<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'tbl_pais';
    public function estados()
    {
        return $this->hasMany('App\Estado');
    }
    
}
