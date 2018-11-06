<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class files extends Model
{
	protected $table="files";
	protected $primaryKey="fileID";

	protected $fillable=[
		"folderID",
		"file",
		"extension"
	];
}
