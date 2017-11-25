<?php

namespace Kepolisian;

use Illuminate\Database\Eloquent\Model;

class Memiliki extends Model
{
 public function post(){
return $this->belongsto('Kepolisian\Post');

 }
 public function tags(){
 	return $this->belongsto('Kepolisian\Tags');
 }

}
