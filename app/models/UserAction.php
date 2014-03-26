<?php

class UserAction extends Eloquent {

	protected $table = 'useractions';

	public $primaryKey = 'useractionsid';

	protected $guarded = array('useractionsid');

	protected $softDelete = true;


}