<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Post extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'slug', 'content'];

    protected $fillable = ['title', 'slug', 'content'];

    public function author() {
        $this->belongsTo('App\User');
    }

    public function category() {
        $this->belongsTo('App\Category');
    }
}
