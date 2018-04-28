<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable=['title','description'];
//untuk menampilkan data menjadi huruf besar semua
    function getTitleAttribute($value){
        return strtoupper($value);
    }
    function getDescriptionAttribute($value){
        return strtoupper($value);
    }


}


