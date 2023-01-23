<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function create (){
        return view(
            'post.create'
        );
    }


    function store_post (Request $request){
        $request->validate([
           'title'=>'required|string',
            'description'=>'required|string',
            'image'=>'required',
            'keyword'=>'required|string',
            'message'=>'required|string'
        ]);

        $slug=str_replace(' ','-',$request->title);

        $post=new post([
            'title'=>$request->title,
            'meta_description'=>$request->description,
            'keywords'=>$request->keyword,
            'image'=>$request->image,
            'message'=>$request->message,
            'slug'=>$slug
        ]);

        $post->save();

        return redirect()->back()->with('success', 'post created successful');
    }
}
