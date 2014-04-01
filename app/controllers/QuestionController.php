<?php

class QuestionController extends BaseController {

  public function exam() {
        $exams = DB::table('exams')
        ->get();

        return Response::json($exams,200);
     }


  public function courses()
  {
    
    $input=Input::all();
    $rules=array(
        'examid'=>'required'
    );

    $v=Validator::make($input,$rules);
    if($v->fails())
    {
        return Response::json(
            array(
                'error'=>'Incomplete form data',
                'message'=>$v->messages()->first('examid')
            ),400);
    }

    $examid = Input::get('examid');

    $courses = DB::table('courses')
        ->where('examid', '=' , $examid)
        ->get();

    return Response::json($courses,200);

  }

  public function questionsByYear(){
    
    $input=Input::all();
    $rules=array(
        'examname'=>'required',
        'coursename' =>'required',
        'year' => 'required'
    );

    $v=Validator::make($input,$rules);
    if($v->fails())
    {
        return Response::json(
            array(
                'error'=>'Incomplete form data',
                'message'=>$v->messages()->first('examname')
            ),400);
    }

    $examname = Input::get('examname');
    $coursename = Input::get('coursename');
    $year = Input::get('year');

    $questions = DB::table('questions')
        ->where('exam', '=' , $examname)
        ->where('category', '=',$coursename)
        ->where('year', '=',$year)
        ->get();

    return Response::json($questions,200);



  }

}
