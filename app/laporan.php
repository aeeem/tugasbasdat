<?php

namespace Kepolisian;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
     protected $table = 'laporan';
     protected $fillable =[ 'nama_laporan','jenis_laporan','diterima','deskripsi',

     ];
     

     public function user(){
     	return $this->belongsTo('Kepolisian\User');
     }

     public function kejadian(){
     	return $this->belongsTo('Kepolisian\Kejadian','jenis_laporan');
     }
}