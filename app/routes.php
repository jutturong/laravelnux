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
	return View::make('hello');
});

Route::get('test',function(){
    
    return  View::make('test');
});

Route::get('test/sub',array('uses'=>'MyController@index'));  #show form submit

Route::post('receive',array('uses'=>'MyController@create'));

Route::get('testblade',function() #ทดสอบตัวอย่างการใช้ blade  file คือ  test1.blade.php
        {
           $view=View::make("test1",array("name"=>"jutturong charoenrit"))->with("age","34");
            $view->location="Khonkaen";    
            $view["specialty"]="PHP";
           
            return  $view;
        });
     


