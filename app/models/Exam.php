<?php

class Exam extends Eloquent {

	protected $table = 'exams';

	public  $primaryKey = 'examid';

	protected $guarded = array('examid');

	protected $softDelete = true;

    public function courses()
    {
        return $this->hasMany('Course','ExamId','ExamId');
    }


}