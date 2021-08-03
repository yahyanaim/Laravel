<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role; 

        if($role=='1')
        {
            return view('admin.dashboard');
        }
        else
        {
            return view('home');
        }
    }
    public function questions(){
        return view('questions');
    }

    public function postList(){
        return view('home');
    }

    public function postAdmin()
    {
        return view('admin.dashboard');
    }

    public function deleteUser()
    {
        return view('admin.dashboard');
    }

    
    public function deletePost()
    {
        return view('admin.dashboard');
    }

    public function reply()
    {
        return view('home');
    }
}
