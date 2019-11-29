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
//view is html version of a code page.
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('test',function (){
        return view('test', [
        'book' => request('book')
    ]); 
    //return view('test');
});



// Route::get('/posts/{post}', function($post){
//     $posts = [
//         'my-first-post' => 'Hello, this is my first post',
//         'my-second-post' => 'Hello, this is my second post',
//     ];

//     if(! array_key_exists($post, $posts)){
//         abort(404,'sorry this post doesnt exist');
//     }
        
//         return view('posts', [
//         'post' => $posts[$post] ?? 'Nothing has been posted'
//     ]);
//     });


//this route now accepts wildcard {post} and instead of having all functionality in this class we created 
// a controller called PostController which has a method show that will do the rest for us
    Route::get('/posts/{post}','PostsController@show');