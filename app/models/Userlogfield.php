<?php

class Userlogfield extends Eloquent {

	protected $table = 'Userlogfields';

	public $primaryKey = 'userlogfieldid';

	protected $guarded = array('userlogfieldid');

	protected $softDelete = true;

}