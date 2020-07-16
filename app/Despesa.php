<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $fillable = ['id', 'deputado_id', 'valor', 'data'];
    public $timestamps = false;

    public function deputado()
    {
        return $this->belongsTo('App\Deputado');
    }
}
