<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    //
    protected $fillable = ['name','description','image'];
    public $table = "destinasi";
}
