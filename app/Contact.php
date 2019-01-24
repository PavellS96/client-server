<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //table name
    protected $table = 'contacts';
    //primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
}
