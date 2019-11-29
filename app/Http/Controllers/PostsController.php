<?php

namespace App\Http\Controllers;
use App\posts_test;

class PostsController
{
    public function show($slug){
            
     //   $post = \DB::table('posts_tests')->where('slug', $slug)->first();
                return view('posts', [
                'post' => posts_test::where('slug',$slug)->firstorfail()
            ]);
    }
}
