<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //Table name
    protected $table = 'comments';
    //Primary key
    public $primaryKey = 'id';
    //Timestaps
    public $timestamps = true;
}
