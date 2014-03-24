<?php

class Role extends Eloquent {

	protected $table = 'roles';

	public static $primaryKey = 'role_id';

	protected $guarded = array('role_id');

	
}