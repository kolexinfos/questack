<?php

class Company extends Eloquent {

	protected $table = 'companys';

	public static $primaryKey = 'company_id';

	protected $guarded = array('company_id');

	protected $softDelete = true;
}