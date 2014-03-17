<?php

class Userlog extends Eloquent {

	public static $primaryKey = 'userlogid';

	protected $guarded = array('userlogid');

	protected $softDelete = true;
}