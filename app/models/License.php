<?php

class License extends Eloquent {

	protected $table = 'licenses';

	public  $primaryKey = 'license_id';

	protected $guarded = array('license_id');

	
}