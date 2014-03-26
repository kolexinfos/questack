<?php

class Exam extends Eloquent {

	protected $table = 'exams';

	public  $primaryKey = 'examid';

	protected $guarded = array('examid');

	protected $softDelete = true;
	
}