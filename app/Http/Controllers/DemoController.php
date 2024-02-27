<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function userdatapage(){
        $all = User::all();
        return view('index',compact('all'));
    }
    public function userstatus($id) {
        $user = User::find($id);
        if ($user) {
            // Toggle the status
            $user->status = $user->status ? 0 : 1;
            $user->save();
        }
    
        return back();
    }
      
    }
   
