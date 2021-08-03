<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB; 

class ReplyController extends Controller
{
    
    // public function reply(Request $request)
    // {

    //     try {

    //         $reply = StudReply::create([
    //             'reply' =>  $request->input('reply'),
    //             'user_id' =>  Auth::user()->id,
    //             'post_id' =>  $request->input('post_id'),


    //         ]);

    //         return view('home', compact('replies'));
    //     } catch (Exception $e) {
       
    //     }
      
    // }
    
        public function reply(Request $request)
        {
           
           DB::table('replies') -> insert([
           'reply'  =>$request->reply,
           'user_id'=> Auth::User()->id,   
           'post_id' =>  $request->input('post_id'),
           ]);
           return view('home', compact('replies')) ;
           
        }
    }

