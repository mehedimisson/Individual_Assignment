<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('login');
//});
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/about',function(){
	return view('about',['cha' => 'About Page']);
	//echo "Tui parsos mama !";
});
Route::get('/contract',function(){
	return view('page.contract');
	//echo "Tui parsos mama !";
});//->middleware('age');

Route::get('/home',function(){
	//return view('about',['cha' => '#mehedimisson']);
	echo "Tui Home e aisha porsos mama !";
});
Route::get('/adminhome', function(){
		return view('adminhome');
});
Route::get('/addcar', function(){
		return view('addcar');
});
/*
Route::group(['middleware'=>['sess']], function(){

	Route::get('/adminhome', function(){
		return view(adminhome);
	});//->name('home.index');
	Route::get('/memhome', function(){
		return view(memhome);
	});//->name('home.index');
	//Route::get('/home/view_users', 'HomeController@list')->name('home.list')->middleware('sess');
	//Route::get('/home/details/{id}', ['as'=>'home.show','uses'=>'HomeController@show']);

}); */
