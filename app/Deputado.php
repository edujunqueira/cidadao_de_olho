<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deputado extends Model
{
    protected $fillable = ['id', 'nome', 'partido'];
    public $timestamps = false;

    public function despesas()
    {
        return $this->hasMany('App\Despesa');
    }
}
