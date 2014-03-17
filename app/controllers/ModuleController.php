<?php
/**
 * Created by PhpStorm.
 * User: JaneCockblocker
 * Date: 17/03/14
 * Time: 12:42
 */

class ModuleController extends BaseController{

    //returns a list of modules
    public function getModules(){
        $modules = Modules::all();
        return Response::json($modules);
    }

    //returns a module by its ID
    public function getModuleById(){
        if(Input::has('id')){
            $modules = Modules::find(Input::get('id'));
            if(!is_null($modules)){
                return Response::json($modules);
            }
            return Response::json(array(
                'success'=>false,
                'fault_msg'=>"Cannot no module with ID ".Input::get('id')
            ));
        }
        else{
            return Response::json(array(
                'success'=>false,
                'fault_msg'=>"cannot load a module without an Id"
            ));
        }
    }

    //Adds a new module, name, link, description, categoryId
    public function setModule(){
        return "Module Saved";
    }
} 