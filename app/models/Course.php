<?php

class Course extends Eloquent {

	protected $table = 'courses';

	public static $primaryKey = 'userlogid';

	protected $guarded = array('userlogid');

	protected $softDelete = true;
}