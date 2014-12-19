<?php

class BlogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all Posts
		$blogs = blog::all();
		return View::make('blogs.index')
			->with('blogs',$blogs);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//create new Post
		return View::make('blogs.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
            'title'       => 'required',
            'description'      => 'required'
        );

        $validator=Validator::make(Input::all(),$rules);
        if ($validator->fails()) {
            return Redirect::to('blogs/create')
                ->withErrors($validator);
        } else {
        	$blog=new blog;
        	$blog->title=Input::get('title');
        	$blog->description=Input::get('description');
        	$blog->save();
        	Session::flash('message', 'New Post Created Successfully!');
            return Redirect::to('blogs');
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
		$post = blog::find($id);
		return View::make('blogs.show')->with('post',$post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = blog::find($id);
		return View::make('blogs.edit')->with('post',$post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
            'title'       => 'required',
            'description'      => 'required'
        );

        $validator=Validator::make(Input::all(),$rules);
         if ($validator->fails()) {
            return Redirect::to('blogs/'.$id.'/edit')
                ->withErrors($validator);
        } else {
        	$blog = blog::find($id);
        	$blog->title=Input::get('title');
        	$blog->description=Input::get('description');
        	$blog->save();
        	Session::flash('message', 'Post updated Successfully!');
            return Redirect::to('blogs');
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
		$blog=blog::find($id);
		$blog->delete();
		Session::flash('message', 'Post deleted Successfully!');
        return Redirect::to('blogs');
	}


}
