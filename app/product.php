<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $frillable=[
	'name'
	'body'
	'picture'
	'picture_small'
	'user_id'
	'cat_id'
	];
}
