<?php

class Question extends Eloquent {

	protected $table = 'questions';

	public static $primaryKey = 'id';

	protected $guarded = array('id');

	protected $softDelete = true;
}