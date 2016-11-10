<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function index()
    {
    	$posts = Redis::get('post:index');
    	
    	//dd($posts);
    	if (!$posts) {
    		$posts = Post::all();
    		$redis = Redis::connection();
    		$redis->set('post:index', $posts);
    	} else {
    		$posts = json_decode($posts);
    	}

    	return view('post.index', ['posts' => $posts]);
    	
    }
}
