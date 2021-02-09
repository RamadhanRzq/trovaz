<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $fillable = ['name','date','description','image'];
    public $table = "berita";
}
