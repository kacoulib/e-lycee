<?php


class Question extends Eloquent {

    public static $rules = [
        'title' => 'required'
    ];

    protected $fillable = array('title', 'content', 'status','nb_questions');


    public function choices()
    {
        return $this->hasMany('choice');
    }

}
