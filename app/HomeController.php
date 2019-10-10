<?php
namespace App\Http\Controllers;
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

	public function showform()
	{
		return View::make('home');
	}

	public function submit_form()
	{
		
	$product = Input::get('product');
	$quantity = Input::get('quantity'); 
	$price = Input::get('price');
	echo $price;
	echo $quantity;
	
	}
	public function update($link){
	
	return View::make('link',array("link"=>$link));
	}
}
?>