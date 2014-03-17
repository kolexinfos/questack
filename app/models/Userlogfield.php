<?php

class Userlogfield extends Eloquent {

	public static $primaryKey = 'userlogfieldid';

	protected $guarded = array('userlogfieldid');

	protected $softDelete = true;

}