<?php

class CommentController extends BaseController {

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
			        'content' => 'required|min:20',
			        'postid' => 'required',
			    );

		$validator = Validator::make($data,$rules);

		if ( $validator->fails() ) {
		    return $validator->messages();
		}
		else {
			$comment = new Comment;
	        $comment->content = Input::get('content');
			$comment->postid = Input::get('postid');
			$comment->userid = Hash::make(Input::get('password'));
			$comment->save();
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
		//
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
			        'content' => 'required|min:20',
			        'postid' => 'required',
			    );

		$validator = Validator::make($data,$rules);

		if ( $validator->fails() ) {
		    return $validator->messages();
		}
		else {
			$comment = Comment::fidn($id);
	        $comment->content = Input::get('content');
			$comment->postid = Input::get('postid');
			$comment->userid = Hash::make(Input::get('password'));
			$comment->save();
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$comment = Comment::fidn($id);
		$comment->destroy();
	}


}
