<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Choice extends Eloquent {
	

	protected $fillable = array('content', 'question_id','reponse');

	public function questions()
	{
		return $this->belongsTo('question');
	}

}
