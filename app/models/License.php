<?php

class License extends Eloquent {

	protected $table = 'licenses';

	public static $primaryKey = 'license_id';

	protected $guarded = array('license_id');

	
}