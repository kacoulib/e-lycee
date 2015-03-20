<?php

class Post extends Eloquent
{

    public static $rules = [
        'title' => 'required'
    ];

    protected $fillable = array('title', 'content', 'status', 'category_id', 'link_thumbnail');

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function scopePublish($query)
    {
        return $query->where('status', '=', 'publish')
            ->orderBy('updated_at', 'desc');
    }

    public function scopeNotTrash($query)
    {
        return $query->where('status', '!=', 'trash')
            ->orderBy('updated_at', 'desc');
    }

    public function scopeTrash($query)
    {
        return $query->where('status', '=', 'trash')
            ->orderBy('updated_at', 'desc');
    }


}
