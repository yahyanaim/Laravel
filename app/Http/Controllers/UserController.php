<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB; 
class UserController extends Controller
{
   
public function deleteUser($id)
{
     DB::table('users') -> where('id', $id)->delete();
     return back() ->with('user_delete', ' Deleted successfully');
}

}