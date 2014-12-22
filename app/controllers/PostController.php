<?php

class PostController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::orderBy('postpoint','desc')->get();
		return json_decode($posts);
	}

	public function PostSearch($key){
		$post = Post::where('subject','like',"%{$key}%")->orderBy('postpoint','desc')->get();
		return json_decode($post);
	}

	public function GetPoints($id){
		$array = array();

		$pointGood = Point::where('post_id','=',"{$id}")->where('isitok','=', 1)->count();
		$pointBad = Point::where('post_id','=',"{$id}")->where('isitok','=', 0)->count();
		$array = array_add($array, 'good', $pointGood);
		$array = array_add($array, 'bad', $pointBad);

		return $array;
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
			        'content' => 'required|min:10',
			        'subject' => 'required|min:5|unique:posts,subject'
			    );

		$validator = Validator::make($data,$rules);

		if ( $validator->fails() ) {
		    return $validator->messages();
		}
		else {
			$post = new Post;
	        $post->subject = Input::get('subject');
			$post->content = Input::get('content');
			$post->save();
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
		$post = Post::find($id);
		return $post;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = Input::all();
		$rules = array(
			        'content' => 'required|min:10',
			        'subject' => 'required|min:5|unique:posts,subject'
			    );

		$validator = Validator::make($data,$rules);

		if ( $validator->fails() ) {
		    return $validator->messages();
		}
		else {
			$post = Post::find($id)->get();
	        $post->subject = Input::get('subject');
			$post->content = Input::get('content');
			$post->save();
		}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = Post::find($id);
		$user->delete();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
