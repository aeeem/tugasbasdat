<?php

namespace Kepolisian;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    	protected $fillable = [
        'title', 'body',];
    public function user(){
      return $this->belongsTo('Kepolisian\User');

    }
    public function tags(){
    	return $this->belongsToMany(Post::class,'memiliki','post_id','tag_id');
    }
}
