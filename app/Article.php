<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category()
    {
        return $this->belongsto('App\Category');
    }
    protected $fillable = ['title' , 'body'];
}
