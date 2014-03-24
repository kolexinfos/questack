<?php

class Userlogfield extends Eloquent {

	protected $table = 'Userlogfields';

	public static $primaryKey = 'userlogfieldid';

	protected $guarded = array('userlogfieldid');

	protected $softDelete = true;

}