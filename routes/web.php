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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/create', 'UsersController@create');
Route::post('/users', 'UsersController@store');

Route::get('/users', 'UsersController@index');

// Route::get('/users', function(){
// 	$users = [
// 		'0' => [
// 			'first_name' => 'Renato',
// 			'last_name' => 'Hysa'
// 		],	
// 		'1' => [
// 			'first_name' => 'Jessica',
// 			'lase_name' => 'Alba'
// 		]
// 	];
// 	return $users;
// });

Route::get('testCsrf',function(){
    $csrf_field = csrf_field();
    $html = <<<GET
        <form method="POST" action="/testCsrf">
             {$csrf_field} <!--去掉此行报错TokenMismatchException--!>
            <input type="submit" value="Test"/>
        </form>
GET;
    return $html;
});

Route::post('testCsrf',function(){
    return 'Success!';
});
