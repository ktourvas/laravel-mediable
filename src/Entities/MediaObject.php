<?php

namespace ktourvas\LaravelMediable\Entities;

use Illuminate\Database\Eloquent\Model;

class MediaObject extends Model {

    protected $file;

    protected $fillable = [ 'path' ];

    protected $types = [ 'image', 'video' ];

//    public function titles() {
//        return $this->hasMany('ktourvas\LaravelBlog\Entities\ArticleTitle', 'article_id');
//    }
//
//    public function body() {
//        return $this->hasOne('ktourvas\LaravelBlog\Entities\ArticleBody', 'article_id');
//    }

}
