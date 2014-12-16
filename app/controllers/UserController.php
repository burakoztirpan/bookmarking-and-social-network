<?php

class UserController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$rules = array(
			        'username' => 'required|min:4|unique:users,username',
			        'password' => 'required|min:8',
			        'email' => 'required|email|unique:users,email'
			    );

		$validator = Validator::make($data,$rules);

		if ( $validator->fails() ) {
		    return $validator->messages();
		}
		else {
			$user = new User;
	        $user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();
		}

        
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id)->get();

		if($user != null){
			return ($user);
		}
		else
		{
			return ("Böyle Bir Kullanıcı Yok!");
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Input::all();
		$rules = array(
			        'username' => 'required|min:4|unique:users,username',
			        'password' => 'required|min:8',
			        'email' => 'required|email|unique:users,email'
			    );

		$validator = Validator::make($data,$rules);

		if ( $validator->fails() ) {
		    return $validator->messages();
		}
		
		$user = User::find($id);
		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		$user->save();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
	}


}
