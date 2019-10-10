<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;



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
		
if(file_exists(base_path('resources/lang/en.json'))){
    $jsonString = file_get_contents(base_path('resources/lang/en.json'));

    $data = json_decode($jsonString, true);
	}
	else
		$data = array();
	

	return View('product', array("data"=>$data,"total"=>0));
	}

	public function submitform(Request $request)
	{
		
	$product = $request->input('product');
	$quantity = $request->input('quantity'); 
	$price = $request->input('price');
	if(file_exists(base_path('resources/lang/en.json'))){
    $jsonContents = file_get_contents(base_path('resources/lang/en.json'));

    $data = json_decode($jsonContents, true);
	}
	
   // $data = json_decode($data, true);
    $data[] = array(
        'Product' => $product,
        'Quantity' => $quantity,
		'Price' => $price,
		'Timestamp' => time()
    );

	$newJsonString = json_encode($data, JSON_PRETTY_PRINT);

    file_put_contents(base_path('resources/lang/en.json'), stripslashes($newJsonString));

	return redirect('/');

   
	
	}
	public function update($link){
	
	return View::make();
	}
}
?>