<?php

class LogController extends BaseController {

  public function getCompletedQuestions() {
      $input=Input::all();

      $rules=array(
          'Userid'=>'required'
      );

      $v=Validator::make($input,$rules);
      if($v->fails())
      {
          return Response::json(
              array(
                  'error'=>'Incomplete Values Sent',
                  'message'=>$v->messages()->first('Userid')
              ),400);
      }

 if

     }

    public function getCompletedTests() {

    }

    public function getSuccess(){ }

}
