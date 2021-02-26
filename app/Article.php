<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category()
    {
        return $this->belongsto('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    protected $fillable = ['title' , 'body'];
}
