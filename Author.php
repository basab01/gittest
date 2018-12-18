<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authmst';
    protected $primaryKey = 'pid';
    public $timestamps = false;
    
    public static $rules = [
	 'salutation' => ['required'],
	 'fname' => ['required','max:30','regex:/[a-z\s]+$/i'],
	 'lname' => ['required','max:30','alpha'],
	];
}
