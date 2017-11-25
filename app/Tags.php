<?php

namespace Kepolisian;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
	
	public $timestamps = false;
	protected $fillable = [
        'nama'];
    public function post(){
    	return $this->belongstomany('Kepolisian\Post','memiliki','tag_id','post_id');
    }

}
