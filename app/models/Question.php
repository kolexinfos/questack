<?php

class Question extends Eloquent {

	protected $table = 'questions';

	public  $primaryKey = 'id';

	protected $guarded = array('id');

	protected $softDelete = true;
}