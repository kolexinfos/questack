<?php

class Role extends Eloquent {

	protected $table = 'roles';

	public  $primaryKey = 'role_id';

	protected $guarded = array('role_id');

	
}