<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function loginUser()
	{
		$data = Input::all();
		$rules = array(
			        'username' => 'required|min:4',
			        'password' => 'required|min:6',
			    );

		$validator = Validator::make($data,$rules);

		if ( $validator->fails() ) {
		    return $validator->messages();
		}else {
		$user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        if (Auth::attempt($user)) {
            return $email = Auth::user()->username;
               
        }
        return Redirect::route('index')->with('flash_error', 'Your username/password combination was incorrect.')->withInput();
		}


	}

	public function logoutUser()
	{
		dd('rr');
		Auth::logout();
	}




}
