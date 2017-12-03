<?php

namespace Kepolisian;

use Illuminate\Database\Eloquent\Model;

class Buron extends Model
{
    protected $table='buron';
    protected $fillable=['nama','deskripsi','foto_id',

  ];
     public function foto(){
      	return $this->hasOne('Kepolisian\Foto');
      }
}
