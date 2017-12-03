<?php

namespace Kepolisian;

use Illuminate\Database\Eloquent\Model;

class Kejadian extends Model
{
    protected $table='kejadian';
	 protected $fillable =[ 'nama_kejadian',
     ];
	     public $timestamps=false;
   public function laporan(){
   	return $this->hasmany('Kepolisian\laporan','id');
   }	

}
