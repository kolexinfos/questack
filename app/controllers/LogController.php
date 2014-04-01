<?php

class LogController extends BaseController {

    public  function QuestionCompleted(){
        $input=Input::all();

        $rules=array(
            'Exam'=>'required',
            'Course'=>'required',
            'Userid'=>'required',
            'QuestionId'=>'required',
            'Year'=>'required',
            'Status'=>'required',
            'Answer'=>'required'
        );

        $v=Validator::make($input,$rules);
        if($v->fails())
        {
            return Response::json(
                array(
                    'error'=>'Incomplete Values Sent',
                    'message'=>$v->messages()->first('Exam')
                ),400);
        }

        $newLog = new Userlog();
        $newLog->UserActionsId = 4;
        $newLog->UserId = Input::get('Userid');
        $newLog->UserLogDetails = "QuestionCompleted";
        $newLog->save();

        $LogId = $newLog->userlogid;

        foreach ($input as $k => $v) {

            $newField = new Userlogfield();
            $newField->userlogid = $LogId;
            $newField->name = $k;
            $newField->value = $v;
            $newField->save();

        }

        return Response::json(array('flash' => 'Question Completed Log Created'), 200);

    }

    public  function TestCompleted(){
        $input=Input::all();

        $rules=array(
            'Exam'=>'required',
            'Course'=>'required',
            'Userid'=>'required',
            'Year'=>'required',
            'Status'=>'required',
            'Result'=>'required',
            'Duration'=>'required'
        );

        $v=Validator::make($input,$rules);
        if($v->fails())
        {
            return Response::json(
                array(
                    'error'=>'Incomplete Values Sent',
                    'message'=>$v->messages()->first('Exam')
                ),400);
        }

        $newLog = new Userlog();
        $newLog->UserActionsId = 3;
        $newLog->UserId = Input::get('Userid');
        $newLog->UserLogDetails = "TestCompleted";
        $newLog->save();

        $LogId = $newLog->userlogid;

        foreach ($input as $k => $v) {

            $newField = new Userlogfield();
            $newField->userlogid = $LogId;
            $newField->name = $k;
            $newField->value = $v;
            $newField->save();

        }
        return Response::json(array('flash' => 'Test Completed Log Created'), 200);
    }

    public function ViewedNote(){
        $input=Input::all();

        $rules=array(
            'Exam'=>'required',
            'Course'=>'required',
            'Userid'=>'required',
            'QuestionId'=>'required',
            'Year'=>'required',
            'Status'=>'required',
            'Answer'=>'required'
        );

        $v=Validator::make($input,$rules);
        if($v->fails())
        {
            return Response::json(
                array(
                    'error'=>'Incomplete Values Sent',
                    'message'=>$v->messages()->first('Exam')
                ),400);
        }

        $newLog = new Userlog();
        $newLog->UserActionsId = 5;
        $newLog->UserId = Input::get('Userid');
        $newLog->UserLogDetails = "ViewedNote";
        $newLog->save();

        $LogId = $newLog->userlogid;

        foreach ($input as $k => $v) {

            $newField = new Userlogfield();
            $newField->userlogid = $LogId;
            $newField->name = $k;
            $newField->value = $v;
            $newField->save();

        }
        return Response::json(array('flash' => 'Note Viewed Log Created'), 200);
    }


}
