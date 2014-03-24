<?php

class Course extends Eloquent {

	protected $table = 'courses';

	public static $primaryKey = 'courseid';

	protected $guarded = array('courseid');

	protected $softDelete = true;
}