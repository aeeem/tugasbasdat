<?php

namespace Kepolisian;

use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
      protected $table='lost';
      protected $fillable=['nama_barang','deskripsi'

      ];
      public function foto(){
      	return $this->hasOne('Kepolisian\Foto');
      }
}
