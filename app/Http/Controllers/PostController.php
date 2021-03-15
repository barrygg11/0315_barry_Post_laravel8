<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function addPost(){
        return view('add-post');
    }
    public function savePost(Request $request){
        DB::table('posts')->insert([
            'name'=>$request->name,
            'content'=>$request->content
        ]);

        return back()->with('post_add','Post added successfully');
    }
    public function postList(){
        $posts = DB::table('posts')->paginate(5);
        return view ('post-list', ['posts'=>$posts]);
    }
}
