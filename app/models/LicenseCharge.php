<?php

class LicenseCharge extends Eloquent {

	protected $table = 'LicenseCharge';

	public static $primaryKey = 'license_license_id';

	protected $guarded = array('license_license_id');

	
}