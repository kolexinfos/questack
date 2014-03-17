<?php
/**
 * Created by PhpStorm.
 * User: JaneCockblocker
 * Date: 17/03/14
 * Time: 12:51
 */

class Modules extends Eloquent{
    protected $table = 'modules';
    protected $primaryKey = 'module_id';
    protected $guarded = array('module_id');
} 