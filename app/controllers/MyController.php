<?php

class MyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    
        protected  $layout="layout.master";
        public function index()
	{
		//
                      return  View::make("test");
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{                         
                          //echo  "create method";
                          $username=Input::get('username');
                          $hasuname=Input::has('username');
                           $email=Input::get('email1');
                          echo $username;
                          echo "<br>";
                          echo $hasuname;
                          echo "<br>";
                          echo  $email;
	}

public function showProfile()
{
    //$this->layout->content=View::make("test1.blade  ");
     // return  View::make("test1.blade");
}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
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
