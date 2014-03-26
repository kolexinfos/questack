<?php

class Userlog extends Eloquent {

	protected $table = 'userlogs';

	public $primaryKey = 'userlogid';

	protected $guarded = array('userlogid');

	protected $softDelete = true;

    public function userlogfield()
    {
        return $this->hasMany('Userlogfield','userlogid','UserLogId');
    }

    public function useraction()
    {
        return $this->hasOne('UserAction','UserActionsId','UserActionsId');
    }
}