<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $table="user";
	protected $primaryKey="id";

	protected $fillable=[
		"title",
		"code"
	];

}
