<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::get();
        return view("client.posts",["posts"=>$posts]);
    }
    public function show($slug){
        $post=Post::where("slug","=",$slug)->first();
        $posts=Post::get();
        return view("client.post",["post"=>$post,"posts"=>$posts]);
    }
}
