<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

//Route::post('/me', 'HomeController@meController');
Route::post('/auth/login', 'AuthController@login');
Route::get('/auth/logout', 'AuthController@logout');
Route::post('/auth/signup', 'AuthController@signup');

Route::get('/exams', function()
{
    $exams = DB::table('exams')

        ->get();

    return Response::json($exams,200);

});

Route::get('/courses', function()
{
    $input=Input::all();
    $rules=array(
        'examname'=>'required'
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

    $courses = DB::table('courses')
        ->where('examname', '=' , $examname)
        ->get();

    return Response::json($courses,200);

});

Route::get('/questionsByYear', function()
{
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

});

Route::get('/misc', function()
{
    //return 'Users!';
    //$questions = DB::table('questions')->distinct('category')->get();

    //$name = Input::get('name');

    //$name = 'kolexinfos';
    //return View::make('hello')->with('name', $name);

    //$questions = DB::table('questions')->get();
    //$questions = DB::table('questions')->find(1);
    //$questions = DB::table('questions')->where('optiona', '=' , 'true')->get();

    //dd($questions);

    //return $questions->category;

    //return View::make('index');




    // $questions = DB::table('questions')
    // ->where('category', '=' , 'mathematics')
    //->where('year', '=','2008')
    //->take(5)
    // ->get();


    // return $questions;
});
