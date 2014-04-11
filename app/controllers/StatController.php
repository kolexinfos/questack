<?php

class StatController extends BaseController {

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

       $userid = Input::get('Userid');

      $logs =DB::select( DB::raw("select count(*) as count from userlogs WHERE userlogdetails = 'QuestionCompleted' and userid = :userid"), array(
          'userid'=> $userid));

       return Response::json($logs,200);

     }

    public function getCompletedTests() {
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

        $userid = Input::get('Userid');

        $logs =DB::select( DB::raw("select count(*) as count from userlogs WHERE userlogdetails = 'TestCompleted' and userid = :userid"), array(
            'userid'=> $userid));

        return Response::json($logs,200);

    }

    public function getSuccess(){
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

    }

}
