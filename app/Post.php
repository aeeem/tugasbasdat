<?php

namespace Kepolisian;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    	protected $fillable = [
        'title', 'body', 'kategori_id'];
    public function user(){
      return $this->belongsTo('Kepolisian\User');

    }
}
