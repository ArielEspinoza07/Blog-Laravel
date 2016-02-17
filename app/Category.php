<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    public function articles()
    {
    	return $this->hasMany('Blog\Article');
    }
}
