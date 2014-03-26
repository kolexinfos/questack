<?php

class Auth extends Eloquent {

	protected $table = 'auth';

	public  $primaryKey = 'session_id';

	protected $guarded = array('session_id');

	
}