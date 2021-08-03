<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB; 

class PostController extends Controller
{
    public function questions()
        {
            return view('questions');
        }
    
    public function savePost(Request $request)
    {
       
       DB::table('posts') -> insert([
       'user_id'=> Auth::User()->id,    
       'title'=>$request->title,    
       'body'=>$request->body,   
       ]);
       return back() -> with('questions' , 'Post added successfully');
       
    }

    public function postList()
    {
        $posts = DB::table('posts')->get();
    
        return view('home', compact('posts'));
    }

    public function postAdmin()
    {
        $posts = DB::table('posts')->get();
        $users = DB::table('users')->get();
    
        return view('admin.dashboard', compact('posts', 'users' ));
    }


    public function deletePost($id)
    {
         DB::table('posts') -> where('id', $id)->delete();
         return back() ->with('post_delete', 'Deleted successfully');
    }
    
}


