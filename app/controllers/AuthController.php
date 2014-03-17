<?php

class AuthController extends BaseController {

  public function status() {
    return Response::json(Auth::check());
  }

  public function secrets() {
    if(Auth::check()) {
      return 'You are logged in, here are secrets.';
    } else {
      return 'You aint logged in, no secrets for you.';
    }
  }

  public function login()
  {
    if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
    {
      return Response::json(Auth::user());
    } else {
      return Response::json(array('flash' => 'Invalid username or password'), 500);
    }
  }

  public function logout()
  {
    Auth::logout();
    return Response::json(array('flash' => 'Logged Out!'));
  }

  public function signup()
  {
        $input=Input::all();
        $rules=array(
            'email'=>'required|unique:users|email',
            'firstname'=>'required',
            'lastname'=>'required',
            'company_id'=>'required',
            'role_id'=>'required',
            'password'=>'required',

        );

        $v=Validator::make($input,$rules);
        if($v->fails())
        {
            return Response::json(
                array(
                    'error'=>'Incomplete form data',
                    'message'=>$v->messages()->first('email')
            ),400);
        }

        $newUser=new User;
        $newUser->email=$input['email'];
        $newUser->role_id=$input['role_id'];
        $newUser->company_id=$input['company_id'];
        $newUser->firstname=$input['firstname'];
        $newUser->lastname=$input['lastname'];
        $temp_password=$input['password'];        
        $newUser->password=Hash::make($temp_password); //$newUser->full_name=$input['firstname'].' '.$input['lastname'];
       
        $newUser->save();

        //send email

        Mail::send('welcome',array('email'=>$newUser->email,'firstname'=>$newUser->firstname,'lastname'=>$newUser->lastname,'temp_password'=>$temp_password),
            function($message) use ($newUser)
            {
            $message->to($newUser->email,$newUser->full_name)->subject('Your Preptitude Account');
        });
        return Response::json($newUser,200);
  }

}
