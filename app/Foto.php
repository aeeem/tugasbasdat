<?php

namespace Kepolisian;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
      protected $table='foto';
       protected $fillable=['path',];
       public $timestamps=false;
       public function buron(){
      	return $this->hasOne('Kepolisian\Buron','foto_id');
      }
       public function lost(){
      	return $this->hasOne('Kepolisian\Lost','foto_id');
      }
}
