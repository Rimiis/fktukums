<?php

namespace App\Http\Controllers;
use App\Post;
use App\speletajs;
use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    
   
    public function start(){
        $posts = Post::orderBy('created_at','desc')->simplePaginate(4);
        $speletaji=speletajs::orderby('punkti','desc')->simplePaginate(10);
        return view('start')->with([
            'posts'=>$posts,
            'speletaji'=>$speletaji,
            ]);
    }
    public function showPost($id){
        $singlePost = Post::find($id);
        $posts = Post::orderBy('created_at','desc')->simplePaginate(4);
        return view('posts.show')->with([
            'post'=>$singlePost,
            'posts'=>$posts,
        ]);
    }
    
    public function club(){
        return view ('club');
    }
    public function treneri(){
        return view ('treneri');
    }
    public function contacts(){
        return view ('contacts');
    }
    public function team(){

        return view ('team');
    }
    public function calendar(){
       
        return view ('calendar');
    }
}
