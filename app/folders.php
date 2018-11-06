<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class folders extends Model
{
	protected $table="folders";
	protected $primaryKey="folderID";

	protected $fillable=[
		"rootID",
		"folder"
	];
}
