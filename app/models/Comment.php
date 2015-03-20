<?php

class Comment extends Eloquent {

    protected $guarded = ['id'];

    public function post() {
        return $this->belongsTo('Post');
    }

    public function scopePublish($query) {
        return $query->where('status', '=', 'publish')
                        ->orderBy('updated_at', 'desc');
    }

    public static function boot() {
        parent::boot();
        //parent::observe(new app\models\observers\CommentObserver);
    }

    public static $rules = [
        'email' => 'required|email'
    ];

}
