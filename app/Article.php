<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['title','content','category_id','user_id'];

    public function category()
    {
    	return $this->belongsTo('Blog\Category');
    }

    public function user()
    {
    	return $this->belongsTo('Blog\User');
    }

    public function images()
    {
    	return $this->hasMany('Blog\Image');
    }

    public function tags()
    {
    	return $this->belongsToMany('Blog\Tag');
    }
}
