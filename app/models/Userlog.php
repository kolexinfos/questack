<?php

class Userlog extends Eloquent {

	protected $table = 'userlogs';

	public $primaryKey = 'userlogid';

	protected $guarded = array('userlogid');

	protected $softDelete = true;
}