<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penginapan extends Model
{
    //
    protected $fillable = ['name','price','description','image'];
    public $table = "penginapan";
}
